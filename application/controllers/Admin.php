<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('datos');
		
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
	}

	function index() {
		if($this->session->userdata('rol')==='1') {
			$this->load->view('admin_view');
		} else {
			echo "Acceso Denegado !";
		}
	}

	function admin_usuarios($id=0) {
		if($this->session->userdata('rol')==='1') {
			$this->load->view('admin_usuarios' , array('id'=>$id));
		} else {
			echo "Acceso Denegado !";
		}
	}

}