<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {
    
    public function saveCliente($data){
        return $this->db->insert("tbl_clientes",$data);
    }
    
}
