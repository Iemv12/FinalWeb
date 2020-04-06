<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorPrincipal extends CI_Controller {

	public function index()
	{
		$this->load->helper('urlFunction');
		$this->load->view('Inicio');
	}

	 function noticia_completa()
	{
		$this->load->view('noticia_completa');
	}
}
