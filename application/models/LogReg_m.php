<?php

class LogReg_m extends CI_Model{

	function insertuser($data){
		$this->db->insert('register',$data);
		return true;
		}	


	function login($exemail, $expass){

		$this->db->where('exemail', $exemail);
		$this->db->where('expass', $expass);
		$query = $this->db->get('register');
		if($query->num_rows() > 0 ){
					return $query->row();
			}
			else
			{
					return false;
			}
	}
}