<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function add_user($data){
        
        $this->db->insert('users', $data);

        echo('success');

    }

}