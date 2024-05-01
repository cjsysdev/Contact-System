<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function add_contact($data){
        $userdata = $this->session->userdata();

        $data['userid'] = $userdata['userid'];

        var_dump($data);
        
        $this->db->insert('contacts', $data);

        echo('success');

    }

    public function get_contact($data){

    
    }

}