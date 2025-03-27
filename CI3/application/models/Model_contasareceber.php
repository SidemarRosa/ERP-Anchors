<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_contasareceber extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
        // Método para pegar o total de contas a receber
    public function getTotalContasAReceber() {
        $this->db->select_sum('valor');
    // $this->db->where('status', 'PENDENTE');  // Filtra apenas as contas a receber pendentes
        $query = $this->db->get('contasareceber');
        return $query->row()->valor ?: 0;  // Retorna 0 caso o valor seja NULL
    }

    // Método para pegar o total de contas a receber no mês atual
    public function getTotalContasAReceberNoMes() {
        $this->db->select_sum('valor');
    //  $this->db->where('status', 'PENDENTE');  // Filtra apenas as contas a receber pendentes
        $this->db->where('MONTH(data_vencimento)', date('m'));  // Filtra pelo mês atual
        $this->db->where('YEAR(data_vencimento)', date('Y'));  // Filtra pelo ano atual
        $query = $this->db->get('contasareceber');
        return $query->row()->valor ?: 0;  // Retorna 0 caso o valor seja NULL
    }

    // Método para pegar o total de contas a receber hoje
    public function getTotalContasAReceberHoje() {
        $this->db->select_sum('valor');
        $this->db->where('DATE(data_vencimento)', date('Y-m-d'));  // Filtra pela data de hoje
        $query = $this->db->get('contasareceber');
        return $query->row()->valor ?: 0;  // Retorna 0 caso o valor seja NULL
    }
    public function getTotalContasAReceberOntem() {
        $this->db->select_sum('valor');
        $this->db->where('DATE(data_vencimento)', date('Y-m-d', strtotime('yesterday')));  // Filtra pela data de ontem
        $query = $this->db->get('contasareceber');
        return $query->row()->valor ?: 0;  // Retorna 0 caso o valor seja NULL
    }
    public function calcularPercentual($valorHoje, $valorOntem) {
        if ($valorOntem == 0) {
            return $valorHoje > 0 ? 100 : 0;  // Se ontem foi 0 e hoje é maior que 0, retorna 100%
        }
        return (($valorHoje - $valorOntem) / $valorOntem) * 100;
    }
    
    
    
}