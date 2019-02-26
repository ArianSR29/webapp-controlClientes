<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Clientes_model");
	}

	public function index(){
		$this->load->view('user/header');
		$this->load->view('user/components/add_cliente');
	}

	public function guardarCliente(){
		$rpu 		= $this->input->post("tb-rpu");
		$estrellas 	= $this->input->post("star");
		$nombre 	= $this->input->post("tb_nombre");
		$apellidos 	= $this->input->post("tb_apellidos");
		$direccion 	= $this->input->post("tb_direccion");
		$colonia 	= $this->input->post("tb_colonia");
		$cp 		= $this->input->post("tb_cp");
		$telefono 	= $this->input->post("tb_telefono");
		$cuenta 	= $this->input->post("tb_cuenta");
		$tarifa 	= $this->input->post("tb_tarifa");
		$fecha_alta = $this->input->post("tb_fecha-alta");
		$hilos 		= $this->input->post("tb_hilos");
		$sts 		= $this->input->post("tb_sts");
		$email 		= $this->input->post("tb_email");
		$rfc 		= $this->input->post("tb_rfc");


		$data = array(
			'rpu' 			=> $rpu,
			'rainting' 		=> $estrellas, 
			'nombre' 		=> $nombre, 
			'apellidos' 	=> $apellidos, 
			'direccion' 	=> $direccion, 
			'colonia' 		=> $colonia, 
			'cp' 			=> $cp, 
			'telefono' 		=> $telefono, 
			'cuenta' 		=> $cuenta, 
			'tarifa' 		=> $tarifa, 
			'fecha_alta' 	=> $fecha_alta, 
			'hilos' 		=> $hilos, 
			'sts-servicio' 	=> $sts, 
			'email' 		=> $email, 
			'rfc' 			=> $rfc, 
		);
		if ($this->Clientes_model->saveCliente($data)) {
			redirect(base_url()."clientes");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la infomación");
			redirect(base_url()."clientes");
		}
		
	}
}
