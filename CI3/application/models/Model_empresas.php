<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_empresas extends CI_Model {

    public function get_by_cnpj($cnpj)
    {
        return $this->db->get_where('empresas', ['cnpj' => $cnpj])->row();
    }

    public function salvar($data)
    {
        $existe = $this->get_by_cnpj($data['cnpj']);

        if ($existe) {
            $this->db->where('cnpj', $data['cnpj']);
            return $this->db->update('empresas', $data);
        } else {
            return $this->db->insert('empresas', $data);
        }
    }
}
