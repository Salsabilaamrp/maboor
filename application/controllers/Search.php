<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Booking');
	}

	public function index()
	{
		if ($this->input->get('rute_from') && $this->input->get('rute_to') && $this->input->get('depart_date') && $this->input->get('passengers') && $this->input->get('flight_class')) {
			$rute_from = $this->input->get('rute_from');
			$rute_to = $this->input->get('rute_to');
			$depart_date = $this->input->get('depart_date');
			$passengers = $this->input->get('passengers');
			$flight_class = $this->input->get('flight_class'); 

			//format output date
			$dateFormated = explode("/", $depart_date);
			$depart_date = "$dateFormated[2]-$dateFormated[0]-$dateFormated[1]";

			//make variable array to insert database
			$data = [
				'date(depart)' => $depart_date,
				'rute_from' => $rute_from,
				'rute_to' => $rute_to,
				'class' => $flight_class
			];

			// var_dump($search);
			// die;

			$data_search = $this->M_Booking->search_rute($data);

			$search =[];
			foreach ($data_search as $value) {
				$search[] = [
					'id' => $value['id'],
					'code' => $value['code'],
					'depart' => $value['depart'],
					'arrive' => $value['arrive'],
					'rute_from' => $value['rute_from'],
					'rute_to' => $value['rute_to'],
					'price' => $value['price'],
					'class' => $value['class'],
					'seat_total' => $this->M_Booking->get_seat_total($value['id'])[0]['seat_qty'],
					'seat_bookeds' => $this->M_Booking->get_seat_booked($value['id'])
				];
			}
		
			// var_dump($search);
			// die;

			if (count($search) == 0) { 
				$this->load->view('satu/v_header');
				$this->load->view('v_search_not_found');
				$this->load->view('satu/v_footer');
			} else {
				$v_data = [
					'data' => $search
				];
				$this->load->view('satu/v_header');
				$this->load->view('v_search', $v_data);
				$this->load->view('satu/v_footer');
			}

		} else {
			redirect(base_url());
		}
	}
}
