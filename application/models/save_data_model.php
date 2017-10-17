<?php

class Save_data_model extends CI_Model
{
	function register($register_array){
		$this->db->insert('register',$register_array);
	}

	function update_user($data,$id){
		$this->db->where('id',$id);
		$this->db->update('register',$data);
	}

	function update_profile($data,$id){

		$update_query = $this->db->get_where('profile', array('id' => $id));

		if($update_query->num_rows > 0)
		{	
			$this->db->where('id',$id);
			$this->db->update('profile',$data);

		} else {	
			$this->db->insert('profile',$data);
		}	
	}

	function online_update($data,$id){
		$this->db->set('status',$data);
		$this->db->where('id',$id);
		$this->db->update('register');
	}

	function update_image($data,$id){
		$update_query = $this->db->get_where('profile', array('id' => $id));

		if($update_query->num_rows > 0)
		{	
			$this->db->set('image',$data);
			$this->db->where('id',$id);
			$this->db->update('profile');

		} else {	
			$this->db->insert('profile',$data);
		}
	}
}