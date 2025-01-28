<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Bem-vindo';
        $data['view'] = 'home'; // View específica a ser carregada
        $this->load->view('layout', $data);
    }
}
