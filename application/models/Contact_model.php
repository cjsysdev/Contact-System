<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function add_contact($data)
    {
        $userdata = $this->session->userdata();

        $data['userid'] = $userdata['userid'];
        $this->db->insert('contacts', $data);

        echo ('success');
    }

    public function get_contacts()
    {
        $user_session = $this->session->userdata();

        $this->db->select('*')
            ->from('contacts')
            ->where('userid', $user_session['userid']);

        $query = $this->db->get();

        return $query->result_array();
    }
}
