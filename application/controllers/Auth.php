<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('Login_model');

    }
	public function index(){
		$this->load->view('login');
    }
    public function login(){
        $username = $this->input->post('login_tb_user');
        $password = $this->input->post('login_tb_password');

        $res = $this->Login_model->login($username, md5($password));

        if (!$res) {
            # code...
            redirect(base_url());
        }else{
            $data = array(
                'id_usuarios'   => $res -> id_usuarios, 
                'nombre'        => $res -> nombre, 
                'apellidos'     => $res -> apellidos, 
                'email'         => $res -> email, 
                'telefono'      => $res -> telefono, 
                'username'      => $res -> username, 
                'password'      => $res -> password, 
                'estado'        => $res -> estado, 
                'rol'           => $res -> rol,
                'login'         => TRUE
            );

            $this->session->set_userdata($data);
            redirect(base_url().'dashboard_admin');

        }
    }
}
