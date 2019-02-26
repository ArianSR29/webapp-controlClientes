<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function login($rpe, $password, $rol){

        $this->db->where("RPE", $rpe);
        $this->db->where("password", $password);
        $this->db->where("rol", $rol);

        $resultados = $this->db->get("tbl_usuarios");

        if ($resultados->num_rows() > 0 ) {
            return $resultados -> row();
        }else{
            return false;
        }
    }

}
