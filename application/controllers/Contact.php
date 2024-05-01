<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['form', 'url', 'menu_helper']);
		$this->load->library(['session']);
		$this->load->model(['user_model', 'contact_model']);
	}

	public function index()
	{
		redirect('contacts');
	}

	public function contacts()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function add_contact()
	{
		$post = $this->input->post(NULL, TRUE);
		$this->contact_model->add_contact($post);
		redirect('diplay_contacts');
	}

	public function diplay_contacts()
	{
		$this->load->view('header');
		$this->load->view('view_contacts');
		$this->load->view('footer');
	}

	public function user_contacts()
	{

		$contacts = $this->contact_model->get_contacts();

		$new_data = [];
		foreach($contacts as $data){
			$sub_array = [
				'name' => $data['name'],
				'company' => $data['company'],
				'phone_number' => $data['phone_number'],
				'email' => $data['email'],
				'action' => generateLinkIcon($data['userid'])
			];

			$new_data[] = $sub_array;
		}

		echo json_encode($new_data);
	}
}
