<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if (!$this->session->userdata("login")){
            redirect(base_url());
		}
		$this->load->model("Usuarios_model");

  	}
	public function index(){

		$this->load->view('user/header');
		$this->load->view('user/dashboard');
	}

	public function guardarLlamada(){

		$solucion 	= $this->input->post("tb_solucion");
		$importe 	= $this->input->post("tb_importe");
		$rpu 		= $this->input->post("tb_rpu");
		$rpe 		= $this->input->post("tb_rpe");


		$data = array(
			'importe' 	=> $importe, 
			'solucion' 	=> $solucion,  
			'fk_rpe' 	=> $rpe, 
			'fk_rpu' 	=> $rpu,
		);

		if($this->Usuarios_model->saveLlamada($data)) {
		 	redirect(base_url()."dashboard_user");
		 } else{
		 	$this->session->set_flashdata("error", "No se pudo guardar la infomación");
		 	redirect(base_url()."dashboard_user");
		 }
		
	}
}
