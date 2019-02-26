<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Llamadas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Llamadas_model");
	}
	public function guardarLlamada(){
		
	}
}
