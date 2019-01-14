<?php
/**
 *
 */
class Users_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function retrieve()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function insert()
    {
        $data = [
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'email'    => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        ];

        return $this->db->insert('users', $data);
    }
}
