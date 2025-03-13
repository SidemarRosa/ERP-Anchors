<?php

class Perfil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Carregar o modelo de usuário
        $this->load->model('Model_usuario');
        $this->load->library('session');
        $this->load->helper('url'); // Carregar o helper de URL
        $this->load->helper('form'); // Carregar o helper de formulário

        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('login')); // Redirecionar para login caso o usuário não esteja logado
        }
    }
    public function index()
    {
        $this->load->view('view_perfil');
        // Verificar se o usuário está logado
        if ($this->session->userdata('logged_in')) {
            // Carregar o modelo para acessar os dados do usuário
            $this->load->model('User_model');

            // Obter o ID do usuário da sessão
            $userId = $this->session->userdata('user_id');

            // Recuperar as informações do usuário usando o ID
            $userData = $this->User_model->get_user_data($userId);

            // Passar os dados do usuário para a visão
            $data['user'] = $userData;

            // Carregar a visão do perfil
            $this->load->view('view_perfil', $data);
        } else {
            // Redirecionar para a página de login se o usuário não estiver logado
            redirect('login');
        }
    }
}
