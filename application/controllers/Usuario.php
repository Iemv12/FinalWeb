<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('RegiCas_model');
		$this->load->helper('noticias');
		$this->load->helper('urlFunction');
		
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
	}

	function index() {
		if($this->session->userdata('rol')==='2') {
			$this->load->view('usuario_view');
		} else {
			echo "Access Denied!";
		}
	}
	
	public function noticias_user($id=0)
	{
		if($this->session->userdata('rol')==='2') {
			$this->load->view('noticias_user', array('id'=>$id));
		} else {
			echo "Acceso Denegado !";
		}
	}
	
	public function Casos_user()
	{
		if($this->session->userdata('rol')==='2') {
			$this->load->view('Casos_user');
		} else {
			echo "Acceso Denegado !";
		}
	}
	
	

}