<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('save_data_model');
		$this->load->model('get_data_model');
		$this->load->helper('url');
		$this->load->helper('string');
	}

	public function _login_rule()
	{
		$this->form_validation->set_rules('email','Email','required');
	}

	public function index()
	{
		$data = array();
		$is_logged_in = $this->session->userdata('logged_in');

		if($is_logged_in == 1){
			redirect(base_url().'welcome/home');
		} else {
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
	}


	function _signin_rules()  {

		$this->form_validation->set_rules('email', ' Email', 'trim|required|xss_clean');
		
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback__verify_login');
		
	}


	function _verify_login(){
		$signin_email = $this->input->post('email');
		$signin_password = $this->input->post('password');

		$valid_fields = $this->get_data_model->get_valid_user($signin_email);

		if(is_array($valid_fields) && !empty($valid_fields)) {

			$password = $valid_fields['password'];

			if($password == $signin_password) {
				return true;
			}
			else {
				$this->form_validation->set_message('_verify_login', "The entered email and password does not match");
				return false;
			}		
		}
		else {	
			$this->form_validation->set_message('_verify_login', "The enter email / mobile not registed with us. please signup if you are new customer.");
			return false;
		}
	}
	

	public function login()
	{
		$data = array();
		$is_logged_in = $this->session->userdata('logged_in');
		
		if($is_logged_in == 1) {
			redirect(base_url().'welcome/home');			
		} else {
			$this->_signin_rules();
			if ($this->form_validation->run() == FALSE)
			{		
				$this->load->view('login');
			} else {
				$valid_fields = $this->get_data_model->get_valid_user($this->input->post('email'));

				$sessiondata = array(
					'user_id' => (int)$valid_fields['id'],
					'user_name' => $valid_fields['fname'],
					'logged_in' => 1);

				$this->session->set_userdata($sessiondata);

				$this->save_data_model->online_update('1',$this->session->userdata('user_id'));

				redirect(base_url().'welcome/home');
			}
		}
	}

	public function home()
	{
		$data = array();
		$is_logged_in = $this->session->userdata('logged_in');
		
		if($is_logged_in == 1) {
			$data['user_data'] = $this->get_data_model->user_value($this->session->userdata('user_id'));
			$this->load->view('home',$data);		
		} else {
			redirect(base_url().'welcome/login');
		}
	}
	public function profile()
	{
		$data = array();
		$is_logged_in = $this->session->userdata('logged_in');
		
		if($is_logged_in == 1) {
			$data['user_profile'] = $this->get_data_model->user_profile($this->session->userdata('user_id'));
			$this->load->view('profile',$data);
		} else {
			redirect(base_url().'welcome/login');
		}
	}
	public function update(){

		$data = array();
		$data = $this->input->post();

		$is_logged_in = $this->session->userdata('logged_in');

		if($is_logged_in == 1){
			$user_value = array(
				'fname' => $data['fname'],
				'lname' => $data['lname'],
				'mobile' => $data['mobile']);

			$this->save_data_model->update_user($user_value,$this->session->userdata('user_id'));

			$profile_value = array(
				'id' => $this->session->userdata('user_id'),
				'nickname' => $data['nickname'],
				'gender' => $data['gender'],
				'email' => $data['email'],
				'relation' => $data['relation'],
				'hobbies' => $data['hobbies']);

			$this->save_data_model->update_profile($profile_value,$this->session->userdata('user_id'));

			redirect(base_url().'welcome/home','refresh');
		
		} else {
			redirect(base_url().'welcome/login');
		}
	}
    public function online()
    {
    	$data = array();
    	$is_logged_in = $this->session->userdata('logged_in');

    	if($is_logged_in == 1){
    		$data['user_online'] = $this->get_data_model->user_online($this->session->userdata('user_id'));
    		$this->load->view('online',$data);
    	} else {
    		redirect(base_url().'welcome/login');
    	}
    }

    public function profile_image(){

    	$is_logged_in = $this->session->userdata('logged_in');
    	if($is_logged_in == 1){
    		$this->load->view('upload');
    	} else {
    		redirect(base_url().'welcome/login');
    	}
    }

    public function upload(){

    	$is_logged_in = $this->session->userdata('logged_in');
    	if($is_logged_in == 1){
    		$file = array();
    		$config['upload_path'] = './upload/';
    	    $config['allowed_types'] = 'gif|jpg|png';
    	    $config['max_size'] = 1000;
    	    $config['max_width'] = 1024;
    	    $config['max_height'] = 768;
    	    $config['encrypt_name'] = TRUE;

    	    $this->load->library('upload', $config);
    	    $this->upload->initialize($config);

    	    $config['file_name'] = $this->session->userdata('user_name').'_'.$this->session->userdata('user_id').'_'.random_string('image',5);

    	    if (!$this->upload->do_upload('userfile'))
    	    { 
    	        $error = array('error' => $this->upload->display_errors());
    	        print_r($error);
				$this->load->view('upload', $error);
    	    }
    	    else
    	   	{
       			$upload_data = $this->upload->data();
       			$file_name = array(
       				'id' => $this->session->userdata('user_id'),
       				'image' => $upload_data['file_name']);

       			$file = $upload_data['file_name'];
       			$this->save_data_model->update_image($file_name,$file,$this->session->userdata('user_id'));
       		    $data = array('upload_data' => $this->upload->data());
       	    	redirect(base_url().'welcome/home','refresh');
       		}
    	} else {
    		redirect(base_url().'welcome/login');
    	}
    }
    public function logout()
    {
    	$is_logged_in = $this->session->userdata('logged_in');
    	if($is_logged_in == 1){
    		$this->save_data_model->online_update('0',$this->session->userdata('user_id'));

			$sessiondata = array(
					    'user_id' => '',
					    'user_name' => '',
					    'logged_in' =>  '');
		
	    	$this->session->unset_userdata($sessiondata);
	  		redirect(base_url().'welcome/login', 'refresh');
    	} else {
    		redirect(base_url().'welcome/login');
    	}
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */