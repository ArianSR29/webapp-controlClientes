<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }
	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('admin/dashboard');
		$this->load->view('layouts/footer');
	}
}
