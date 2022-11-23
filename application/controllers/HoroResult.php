<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'application/third_party/astro-api-php-client-master/src/VedicRishiClient.php';

class HoroResult extends CI_Controller {

    public function index() {



        // echo "Result";


        $this->load->library('form_validation');


        $this->form_validation->set_rules('dateDOB', 'DOB', 'required');
        

        if($this->form_validation->run()) {
            // echo "Validation Successful";
            $uDOB = strtotime($this->input->post('dateDOB'));
            $date=date('d',$uDOB);
            $month=date('m',$uDOB);
            $year=date('Y',$uDOB);
            // echo 'Year is '.$year;

            $clientInstance = new VedicRishiClient('621264', '6d135ef3b0b261547bfe11a94d8ef9ec');

            $response1 = $clientInstance->getAstroDetails($date, $month, $year, 4, 0, 25.123, 82.34, 5.5);
            // echo $response1;

            $response2 = $clientInstance->getBirthDetails($date, $month, $year, 4, 0, 25.123, 82.34, 5.5);
            // echo $response2;

            // $response3 = $clientInstance->getBasicGemSuggestion($date, $month, $year, 4, 0, 25.123, 82.34, 5.5);
            // echo $response3;

            $this->load->view('HoroResult', ['response1' => $response1, 'response2' => $response2]);





        }
        else {
            echo validation_errors();
        }
    }

}

?>