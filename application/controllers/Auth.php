<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Login_model");
	}
	public function index(){

		if($this->session->userdata("login")){
			redirect(base_url()."dashboard");
		}else{
			$this->load->view('login.php');
		}
	}

	public function login(){
		$username = $this->input->post("tb_user");
		$password = $this->input->post("tb_password");

		$res = $this->Login_model->login($username, md5($password));


		if(!$res){
			$this->session->set_flashdata("error", "El usuario o la contraseña son incorrectos");
			redirect(base_url());
		}else{
			$data = array(
				'id_usuario' => $red->id,
				'nombre' => $res->nombre,
				'apellidos' => $res->apellidos,
				'rol' => $res->rol,
				'login' => TRUE
			);

			$this->session->set_userdata($data);
			redirect(base_url()."dashboard");
		}
	}

}
