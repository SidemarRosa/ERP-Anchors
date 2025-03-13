<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentica extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //carrega o model
        $this->load->model('model_usuario', TRUE);
        //carrega o helper de url
        $this->load->helper('url');
    }

    public function index()
    {
        //carrega a library de validação
        $this->load->library('form_validation');
        //define as regras de validação
        $this->form_validation->set_message('required', 'O campo %s é obrigatório');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Senha', 'trim|required');
        //verifica se o formulário foi submetido    
        if ($this->form_validation->run() == FALSE) {
            //se não foi submetido, carrega a view de login
            $this->load->view('view_login');
        } else {
            //se foi submetido, pega os dados do formulário
            $email = $this->input->post('email');
            $senha = $this->input->post('password');
            //verifica se o email e a senha são válidos
            $usuario = $this->model_usuario->get_usuario($email, $senha);
            if ($usuario) {
                //se o usuário existe, cria a sessão
                $this->session->set_userdata('usuario', $usuario);
                //redireciona para a página de dashboard
                redirect('dashboard');
            } else {
                //se o usuário não existe, exibe uma mensagem de erro
                echo 'Usuário ou senha inválidos';
            }
        }
    }
}
