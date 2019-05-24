<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Booking');
	}

	public function index()
	{	
		
		$rute_all = $this->M_Booking->get_all_rute();

		if (count($rute_all) == 0) {
			$data['rute_all'][0] =[
				'rute_from' => 'not_available',
				'rute_to' => 'not_available',
			];
		}
		else{
			$data['rute_all'] = $rute_all;
		}

		$this->load->view('satu/v_header');
		$this->load->view('v_index',$data);
		$this->load->view('satu/v_footer');
	}
}

