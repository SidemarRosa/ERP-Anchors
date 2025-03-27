<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_clientes extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function getClientesHoje() {
        $this->db->where('DATE(data_cadastro)', 'CURDATE()', false);
        return $this->db->count_all_results('clientes');
    }

    public function getClientesOntem() {
        $this->db->where('DATE(data_cadastro)', 'CURDATE() - INTERVAL 1 DAY', false);
        return $this->db->count_all_results('clientes');
    }

    public function calcularPercentual($hoje, $ontem) {
        if ($ontem == 0) return 100; // Evitar divisão por zero
        return (($hoje - $ontem) / $ontem) * 100;
    }
}