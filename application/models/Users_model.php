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

    public function retrieve($id = null)
    {
        if (is_null($id)) {
            $query = $this->db->get('users');
            return $query->result();
        }

        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
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

    public function delete($id)
    {
        return $this->db->delete('users', ['id' => $id]);
    }

    public function update()
    {
        $data = [
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'email'    => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        ];

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('users', $data);
    }

    public function total_users()
    {
        return $this->db->count_all('users');
    }
}
