<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        date_default_timezone_set('America/Sao_Paulo');
    }
    public function index()
    {
        // Verifique se o formulário foi enviado
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $senha = $this->input->post('password');

            // Verifique se o email e a senha são válidos
            if ($email == 'sidemarrosa25@gmail.com' && $senha == '123') {
                redirect('dashboard');
            } else {
                echo 'Usuário ou senha inválidos';
            }
        }

        // Carregar a view de login
        $this->load->view('view_login');
    }
}
