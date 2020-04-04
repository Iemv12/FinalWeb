<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	function auth() {
		$username  = $this->input->post('usuario',TRUE);
		$password  = $this->input->post('password',TRUE);
		$result    = $this->Login_model->check_user($username, $password);
		if($result->num_rows() > 0) {
			$data  = $result->row_array();
			$name  = $data['usuario'];
			$email = $data['email'];
			$rol = $data['rol'];
			$sesdata = array(
				'usuario'  => $username,
				'email'			=> $email,
				'rol'     => $rol,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($rol === '1') {
				redirect('Admin');
			} elseif($rol === '2') {
				redirect('Usuario');
			} 
		} else {
			echo "<script>alert('Acceso denegado');history.go(-1);</script>";
		}
		$this->load->view('login_view');
	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}

}
