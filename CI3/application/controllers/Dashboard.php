<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); // Carrega o helper de URL para usar redirect()
        $this->load->library('session'); // Carrega a biblioteca de sessão
        $this->load->model('Model_clientes'); // Carrega o model Model_clientes
    }
    public function index()
    {   
        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/anchors/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            //dashboard insights
            $clientesHoje = $this->Model_clientes->getClientesHoje();
            $clientesOntem = $this->Model_clientes->getClientesOntem();
            $percentualClientes = $this->Model_clientes->calcularPercentual($clientesHoje, $clientesOntem);
            
            //carrega dados para a view dashboard
            $data = [
                'clientesHoje' => $clientesHoje,
                'percentual' => $percentualClientes
            ];
    
            $this->load->view('view_dashboard', $data);
        }
    }
}
