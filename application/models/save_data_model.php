<?php

class Save_data_model extends CI_Model
{
	function register($register_array){
		$this->db->insert('register',$register_array);
	}
}