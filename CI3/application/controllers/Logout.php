<?php
class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); // Carregar o helper de URL
    }

    public function index()
    {
        $this->session->sess_destroy();  // Para destruir a sessão do usuário
        redirect('http://localhost/anchors/CI3/index.php/login');  // Redirecionar para a página de login
    }
}
