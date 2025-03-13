<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_usuario extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Método exemplo para obter todos os usuários
    public function getAllUsers()
    {
        $query = $this->db->get('usuarios');
        return $query->result();
    }

    // Método para obter um usuário pelo ID
    public function getUsuarioById($id)
    {
        // Verificar se o ID é válido
        if ($id) {
            $query = $this->db->get_where('usuarios', array('id' => $id));
            return $query->row();  // Retorna uma linha ou NULL
        }
        return NULL;  // Retorna NULL se o ID não for válido
    }

    // Método exemplo para inserir um novo usuário
    public function inserirUsuario($dados)
    {
        return $this->db->insert('usuarios', $dados);
    }

    // Método exemplo para atualizar um usuário
    public function atualizarUsuario($id, $dados)
    {
        $this->db->where('id', $id);
        return $this->db->update('usuarios', $dados);
    }

    // Método exemplo para deletar um usuário
    public function deletarUsuario($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('usuarios');
    }
}
