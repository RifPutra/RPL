<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('admin/v_login');
	}

	public function proses_login()
	{
		$telepon = $this->input->post('telepon');
		$password = $this->input->post('password');
		if ($this->auth->login_user($telepon, $password)) {
			redirect('home');
		} else {
			$this->session->set_flashdata('error', 'telepon & Password salah');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('telepon');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('login');
	}
}
