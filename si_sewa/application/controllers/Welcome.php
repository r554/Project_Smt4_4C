<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('Frontend/index');
	}
	public function contoh()
	{
		$this->load->view('admin/dasboard/blank');
	}
	public function login()
	{
		$this->load->view('Frontend/login');
	}
	public function profil()
	{
		$this->load->view('Frontend/profil');
	}
	public function register()
	{
		$this->load->view('Frontend/register');
	}
	public function properti_anda()
	{
		$this->load->view('pemilik/index');
	}
	public function daftar_postingan()
	{
		$this->load->view('pemilik/daftar_postingan');
	}
	public function tambah_postingan()
	{
		$this->load->view('pemilik/tambah_postingan');
	}
}
