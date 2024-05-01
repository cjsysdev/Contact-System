<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form','url']);
        $this->load->library(['session']);
		$this->load->model(['user_model', 'contact_model']);
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');

	}

	public function add_contact(){
		$post = $this->input->post(NULL, TRUE);
		$this->contact_model->add_contact($post);
	}
}
