<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('UserModel');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('page/home'); // Redirect ke page home

        // function render_login tersebut dari file core/MY_Controller.php

        $this->load->view('Frontend/login'); // Load view login.php
    }

    public function login()
    {
        $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
        $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

        $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php

        if (empty($user)) { // Jika hasilnya kosong / user tidak ditemukan
            $this->session->set_flashdata('message', 'Username Atau Password Salah'); // Buat session flashdata
            redirect('auth'); // Redirect ke halaman login
        } else {
            if ($password == $user->password) { // Jika password yang diinput sama dengan password yang didatabase
                $session = array(
                    'authenticated' => true, // Buat session authenticated dengan value true
                    'username' => $user->username,  // Buat session username
                    'nama' => $user->nama, // Buat session nama
                    'role' => $user->id, // Buat session role
                    'id' => $user->id, // Buat session role
                );

                $this->session->set_userdata($session); // Buat session sesuai $session
                redirect('page/home'); // Redirect ke halaman home
            } else {
                $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
                redirect('auth'); // Redirect ke halaman login
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy(); // Hapus semua session
        redirect('welcome'); // Redirect ke halaman login
    }

    public function register()
    {
        $data['title'] = 'Sign Up';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() === FALSE) {
            //$this->load->view('FrontEnd/login');
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->UserModel->register($enc_password);

            // Set message
            $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

            redirect('welcome/login');
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            // Set message
            $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

            redirect('welcome/login');
        }
    }
}
