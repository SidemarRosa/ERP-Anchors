<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospect extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary models, libraries, or helpers here
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
    }

    public function index() {
        // Verificar se o usuário está logado
        if(!$this->session->userdata('logged_in')) {
            redirect('http://localhost/anchors/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            // Carregar a view principal do Prospect
            $this->load->view('view_prospect');
        }
    }
}