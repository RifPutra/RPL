<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('admin/v_register');
	}

	public function proses()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('telepon', 'telepon', 'trim|required|min_length[11]|max_length[13]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('alamat', 'alamat');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]|max_length[255]');
		if ($this->form_validation->run() == true) {
			$nama = $this->input->post('nama');
			$telepon = $this->input->post('telepon');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$password = $this->input->post('password');
			$this->auth->register($nama, $telepon, $email, $alamat, $password);
			$this->session->set_flashdata('success_register', 'Proses Pendaftaran Pengguna Berhasil');
			redirect('login');
		} else {
			$this->session->set_flashdata('Gagal Mendaftar, Silahkan Ulangi!', validation_errors());
			redirect('register');
		}
	}
}
