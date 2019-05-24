<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Reservation');
    }

    public function index(){
        if($this->session->userdata('user') == false){
            redirect(base_url());
        }

        $user_id = $this->session->userdata('user')['id'];

        $reservation = $this->M_Reservation->get_reservation($user_id);

        $data['reservation'] = $reservation;

        $this->load->view('satu/v_header');
        $this->load->view('v_reservation',$data);
        $this->load->view('satu/v_footer');
    }

    public function status()
    {
        // $user_id =
        $reservation_code = $_GET['reservation_code'];

        $data['customer'] = $this->M_Reservation->get_all_customer($reservation_code);
        $data['rute'] = $this->M_Reservation->get_rute($reservation_code);
        $data['proof_of_payment'] = $this->M_Reservation->check_proof_of_payment($reservation_code)['proof_of_payment'];
        // var_dump($data['proof_of_payment']);
        // die;
        if (count($data['customer']) or count($data['customer']) == 0)

        $this->load->view('satu/v_header');
        $this->load->view('v_reservation_status',$data);
        $this->load->view('satu/v_footer');
    }
    public function proof_of_payment()
    {
        // var_dump($this->session->userdata());
        // die;        
        $rand_basename = explode('.',basename($_FILES["image"]["name"]));
        $rand_basename = bin2hex(openssl_random_pseudo_bytes(32)).'.'.end($rand_basename);

        $target_dir = "./assets/proof_of_payment/";
        $target_file = $target_dir . $rand_basename;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // buat ngecek kalo file udah ada
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // buat ngecek file kegedean
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // format file
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
            $uploadOk = 0;
        }
        // ngecek kalo file belum di upl
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // kalo semuanya udah ok
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            $this->M_Reservation->insert_proof_of_payment($this->input->post('reservation_code'),$rand_basename);
            redirect(base_url().'reservation/status?reservation_code='.$this->input->post('reservation_code'));
              
            } else {
                echo ". Sorry, there was an error uploading your file.";
            }
        }
    }
}