<?php

class Perfil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Carregar o modelo de usuário
        $this->load->model('Model_usuario');

        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('login'); // Redirecionar para login caso o usuário não esteja logado
        }
    }
    public function index()
    {
        // Obter o id do usuário (deve ser definido de acordo com a sua lógica de login)
        $user_id = $this->session->userdata('user_id');

        // Carregar o modelo
        $this->load->model('Model_usuario');

        // Obter os dados do usuário com base no ID
        $dados['usuario'] = $this->Model_usuario->getUsuarioById($user_id);

        // Verificar se o usuário foi encontrado
        if ($dados['usuario']) {
            // Carregar a view passando os dados do usuário
            $this->load->view('view_perfil', $dados);
        } else {
            // Se não encontrar, redirecionar ou exibir uma mensagem de erro
            show_error('Usuário não encontrado!');
        }
    }
}
