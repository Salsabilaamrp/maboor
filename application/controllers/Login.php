<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Account');
	}

	public function index()
	{
		$this->load->view('satu/v_header');
		$this->load->view('v_login');
		$this->load->view('satu/v_footer');
	}

	public function signin()
    {
        if ($this->session->userdata('user') == true) {
            redirect(base_url());
        }

        $this->load->view('satu/v_header');
		$this->load->view('v_login');
		$this->load->view('satu/v_footer');
    }
	public function signin_process()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$user_data = $this->M_Account->get_password_users($username);

		if (count($user_data) == 0) {
			redirect(base_url() . 'login/signin?alert=failed');
		}

		$password_get = $user_data[0]["password"];
		$user_id = $user_data[0]["id"];

		if (password_verify($password, $password_get) == true) {
			$value = [
				'username' => $username,
				'id' => $user_id
			];

			$this->session->set_userdata('user',$value);
			
			if ($this->input->post('url_before') !== '') {
				
				if($this->session->userdata($this->input->post('url_before'))){
					redirect($this->session->userdata($this->input->post('url_before')));
				}
				else{
					redirect(base_url());
				}

			}
			else {
				redirect(base_url());
			}
		} else {
			redirect(base_url() . 'login/signin?alert=failed');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect(base_url());
	}
}
