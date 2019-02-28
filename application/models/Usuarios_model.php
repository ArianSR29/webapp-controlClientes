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
    public function getUsuarioEdit($rpe){
        $this->db->where("rpe", $rpe);

        $resultado = $this->db->get("tbl_usuarios");
        return $resultado->row();
    }
    public function updateUsuario($rpe, $data){
        $this->db->where("rpe", $rpe);
        return $this->db->update("tbl_usuarios", $data);

    }
    public function saveLlamada($data){
        return $this->db->insert("tbl_llamadas",$data);
    }
}