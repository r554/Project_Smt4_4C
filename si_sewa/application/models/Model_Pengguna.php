<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_Pengguna extends CI_Model
{
    private $_table = "tabel_pengguna";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    function tampil_data($id)
    {
        return $this->db->get_where($this->_table, ["kd_pengguna" => $id])->row();
    }
}
