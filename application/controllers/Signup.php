<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Account');
	}

	public function index()
	{
		$this->load->view('satu/v_header');
		$this->load->view('v_signup');
		$this->load->view('satu/v_footer');
	}
	
	public function signup_process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');

		$password = password_hash($password, PASSWORD_DEFAULT);

		$data = [
		"username" => $username,
		"password" => $password,
		"fullname" => $fullname,
		"level" => 1
		];

		if ($this->M_Account->signup_insert($data) == true) {
			redirect(base_url() . 'login');
		} else {
			redirect(base_url() . 'signup?alert=failed');
		}
	}


}
