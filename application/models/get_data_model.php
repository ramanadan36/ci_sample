<?php

class Get_data_model extends CI_Model{

	function profile_data($id){
		$this->db->select('*');
		$this->db->from('profile');
		$this->db->where('id',$id);
		$query = $this->db->get();
        return $query->result();
	}

	function user_online($id){
		$this->db->select('fname,lname,status');
		$this->db->from('register');
		$this->db->where('id !=',$id);
		$query = $this->db->get();
        return $query->result();
	}
}