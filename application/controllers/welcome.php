<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('save_data_model');
		$this->load->helper('url');

	}

	public function _login_rule()
	{
		$this->form_validation->set_rules('email','Email','required');
	}

	public function index()
	{
		$data = array();
		$this->_login_rule();

		if($this->form_validation->run() == FALSE){
			$this->load->view('register');
		} else {
			$data = $this->input->post();

			$registration_array  = array(
				'fname' => $data['fname'],
				'lname' => $data['lname'],
				'mobile' => $data['mobile'],
				'email' => $data['email'],
				'password' => $data['password']);

			$this->save_data_model->register($registration_array);
			redirect(base_url().'welcome/login');
		}
	}
	

	public function login()
	{
		$this->load->view('login');
	}

	public function home()
	{
		$this->load->view('home');
	}
	public function profile()
	{
		$this->load->view('profile');
	}
	public function addmoredetail()
	{
		$this->load->view('addmoredetail');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */