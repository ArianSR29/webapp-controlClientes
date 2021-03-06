<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	public function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/components/add_user');
	}

	public function guardarUsuario(){
    $rpe 						= $this->input->post("tb_rpe");
    $nombre 				= $this->input->post("tb_nombre");
  	$apellidos 			= $this->input->post("tb_apellidos");
    $email 					= $this->input->post("tb_email");
    $telefono 			= $this->input->post("tb_telefono");
    $username 			= $this->input->post("tb_username");
		$password			 	= $this->input->post("tb_password");
		$rol 						= $this->input->post("rol");

		$data = array(
			'rpe' 			=> $rpe, 
			'nombre' 		=> $nombre, 
			'apellidos' => $apellidos, 
			'email' 		=> $email, 
			'telefono' 	=> $telefono, 
			'username' 	=> $username, 
			'password' 	=> md5($password), 
			'estado' 		=> "1", 
			'rol' 			=> $rol, 
		);
		if ($this->Usuarios_model->saveUsuario($data)) {
			redirect(base_url()."usuarios");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la infomación");
			redirect(base_url()."usuarios");
		}
	}
	
	public function editUsuario($rpe){
		$data = array(
			'usuarios' => $this-> Usuarios_model->getUsuarioEdit($rpe)
		);

		$this->load->view('admin/header');
		$this->load->view('admin/components/edit_user', $data);
	}

	public function updateUsuario(){
		$rpe 				= $this->input->post("tb_rpe");
    $nombre 		= $this->input->post("tb_nombre");
  	$apellidos 	= $this->input->post("tb_apellidos");
    $email 			= $this->input->post("tb_email");
    $telefono 	= $this->input->post("tb_telefono");
    $username 	= $this->input->post("tb_username");
		$rol 				= $this->input->post("rol");

		$data = array(
			'rpe' 			=> $rpe, 
			'nombre' 		=> $nombre, 
			'apellidos' => $apellidos, 
			'email' 		=> $email, 
			'telefono' 	=> $telefono, 
			'username' 	=> $username, 
			'estado' 		=> "1", 
			'rol' 			=> $rol, 
		);
		
		if($this->Usuarios_model->updateUsuario($rpe, $data)) {
			redirect(base_url()."dashboard_admin");
			
		}else{
			$this->session->set_flashdata("error", "No se pudo actualizar la infomación");
			redirect(base_url()."mantenimiento/editUsuario/".$rpe);
		}
	}











}