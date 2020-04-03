<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegiCas_model extends CI_Model {

	public function __construct()
	{
        parent::__construct();
        $this->load->database();
    }
    
    public function guardarCasos($casos = array()){
        $this->db->insert('casos',$casos);
    }

}