<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NoticiasCasos extends CI_Controller {

	public function casos()
	{
		$this->load->view('Casos');
    }
    
    public function noticias()
	{
		$this->load->view('Noticias');
	}
}
