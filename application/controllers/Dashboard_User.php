<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if (!$this->session->userdata("login")){
            redirect(base_url());
		}

		// $this->load->model('Usuarios_model');
    }
	public function index(){

		// $data = array(
		// 	'usuarios' => $this->Usuarios_model->getUsuarios(),
		// );

		$this->load->view('user/header');
		$this->load->view('user/dashboard');

		// $url = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	
		// if(false !== strpos($url,'/dashboard_admin')){
		// 	 $this->session->sess_destroy();
		// 	 redirect(base_url());
		// }
		// echo $url;
	}
}
