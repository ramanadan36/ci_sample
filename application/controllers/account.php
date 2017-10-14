<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('get_data_model');
	}

	public function index(){
		$data = array();

		echo "<pre>";
		print_r($this->get_data_model->user_online(1));
	}

}