<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form','url']);
		$this->load->model(['user_model']);
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login(){

	}

	public function logout(){

	}

	public function registration_page(){
		$this->load->view('register');
	}

	public function register_user(){
		$post = $this->input->post(NULL, TRUE);
		
		$post['password'] = md5($post['password']);
		$post['confirm_password'] = md5($post['confirm_password']);

		if($post['password'] === $post['confirm_password']){
			unset($post['confirm_password']);
			$this->user_model->add_user($post);
		} 

		// redirect('registration_page');

	}
}
