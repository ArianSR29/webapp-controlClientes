<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_User extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }
	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('user/dashboard');
		$this->load->view('layouts/footer');
	}
}
