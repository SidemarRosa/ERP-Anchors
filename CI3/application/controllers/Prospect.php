<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prospect extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary models, libraries, or helpers here
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
    }

    public function index()
    {
        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/anchors/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            $data['title'] = 'ERP Anchors - Prospect';
            $data['page'] = 'Prospect';
            
            $this->load->view('template', $data);
            $this->load->view('view_prospect'); // view principal da página
            $this->load->view('footer'); // rodapé da página
        }
    }
}
