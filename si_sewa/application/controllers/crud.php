<?php

class Crud extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('profil');
        $this->load->model('propertimodel');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data['user'] = $this->profil->tampil_data();
        $this->load->view('pemilik/index', $data);
    }

    public function tampil_akun($id = null)
    {
        if (!isset($id)) redirect('welcome/index');

        $product = $this->profil;
        $data["user"] = $product->getById($id);
        if (!$data["user"]) show_404();

        $this->load->view("pemilik/index", $data);
    }

    function daftar_postingan($id = null)
    {
        //$data['user'] = $this->propertimodel->tampil_data()->result();
        // $this->load->view('pemilik/daftar_postingan', $data);
        $a = $id;
        if (!isset($id)) redirect('welcome/index');

        $product = $this->propertimodel;
        $data["user"] = $product->getById($id);
        if (!$data["user"]) {
            //show_404();
            $this->load->view("pemilik/daftar_postingan_kosong");
        } else {
            $this->load->view("pemilik/daftar_postingan", $data);
        }
    }

    public function tambah_postingan()
    {
        $product = $this->propertimodel;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("pemilik/tambah_postingan");
    }

    public function delete_postingan($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->propertimodel->delete($id)) {
            redirect(site_url('crud/daftar_postingan'));
        }
    }

    public function edit_postingan($id = null)
    {

        if (!isset($id)) redirect('welcome');

        $product = $this->propertimodel;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $product->getById2($id);

        if (!$data["user"]) show_404();

        $this->load->view("pemilik/edit_postingan", $data);
    }
}
