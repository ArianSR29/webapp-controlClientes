<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if (!$this->session->userdata("login")){
            redirect(base_url());
        }
		
		$this->load->model('Usuarios_model');
    }
	public function index(){

		$data = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(),
		);

		$this->load->view('admin/header');
		$this->load->view('admin/components/list', $data);
	}
}
