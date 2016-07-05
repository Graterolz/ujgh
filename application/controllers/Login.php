<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		//$this->load->model('Login_model');
	}
	
	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('login/login');
		$this->load->view('template/footer');
	}
}