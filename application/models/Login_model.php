<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    function check_user($username,$password){
		$this->db->select('*'); 
		$this->db->from('users_tbl'); 
		$this->db->where('usuario', $username); 
		$this->db->where('password', ($password)); 
		$query = $this->db->get(); 
		return $query;

    }
}
