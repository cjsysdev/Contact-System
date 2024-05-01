<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login(){

	}

	public function logout(){

	}

	public function register(){
		$this->load->view('register');
	}
}
