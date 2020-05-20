<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    public function register($enc_password)
    {
        $role = "admin";
        // User data array
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'nama' => $this->input->post('nama'),
            'role' => $role,
        );

        // Insert user
        return $this->db->insert('user', $data);
    }

    // Check username exists
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}
