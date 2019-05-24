<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
	
	$url = "http://papaside.com/data.php";
	$get_url = file_get_contents($url);
	$data = json_decode($get_url);
	$data_array = array('datalist' => $data );

		$this->load->view('welcome_message',$data_array);
	}
}
