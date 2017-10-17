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

	function get_valid_user($email){
        $this->db->select('id,password,fname');
        $this->db->from('register');
        $this->db->where('email',$email);
        $query = $this->db->get();
        return $query->row_array();
    }

    function user_value($id){
    	$this->db->select('r.email,r.fname,r.lname,p.image');
    	$this->db->from('register r');
        $this->db->join('profile p','r.id = p.id','left');
    	$this->db->where('r.id',$id);
    	$query = $this->db->get();
        return $query->result();
    }

    function user_profile($id){
    	$this->db->select('r.fname,r.lname,r.mobile,p.email,p.image,p.nickname,p.relation,p.gender,p.hobbies');
    	$this->db->from('register r');
    	$this->db->join('profile p','r.id = p.id','left');
    	$this->db->where('r.id',$id);
    	$query = $this->db->get();
        return $query->result();
    }
}