<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }
    
	public function index(){
        
        // if ($this->session->userdata('login')) {
        //      redirect(base_url().'dashboard_admin');
        //  }else{
        //      $this->load->view('login');
        //   }
              $this->load->view('login');

    }

    public function login(){
        $rpe = $this->input->post('login_tb_rpe');
        $password = $this->input->post('login_tb_password');
        $rol = $this->input->post('tipo-usuario');

        $res = $this->Login_model->login($rpe, md5($password), $rol);

        if (!$res) {
            $this->session->set_flashdata('error', 'Usuario o contraseña incorrectos');
            redirect(base_url());
        }else{
            $data = array(
                'rpe'           => $res -> rpe, 
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
        }
         if($rol == 1){
            $this->session->set_userdata($data);
            redirect(base_url().'dashboard_admin');

        }elseif($rol == 2){
            $this->session->set_userdata($data);
             redirect(base_url().'dashboard_user');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
