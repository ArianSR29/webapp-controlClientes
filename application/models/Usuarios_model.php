<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function getUsuarios(){
        $this->db->where("estado", "1");
        $resultados = $this->db->get("tbl_usuarios");
        return $resultados->result();
    }
    
    public function saveUsuario($data){
        return $this->db->insert("tbl_usuarios",$data);
    }
}