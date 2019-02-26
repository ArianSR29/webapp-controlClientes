<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
	public function index(){
		$this->load->view('user/header');
		$this->load->view('user/components/add_cliente');
	}
}
