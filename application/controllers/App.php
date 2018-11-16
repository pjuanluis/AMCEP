<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function  __construct() {
		parent:: __construct();
		$this->load->model('Principal_Model');
        $this->load->library(array('session','form_validation'));
	}


	public function index() {
		$this->load->view('login');
	}

	public function login() {
		$correo = $this->input->post('email');
		$pass = $this->input->post('password');

		$existe_usr = $this->Principal_Model->existeUsr($correo, $pass);

		if($existe_usr == TRUE) {
			$data = array(
				'is_logued_in' => TRUE,
				'id_usuario' => $existe_usr->id,
				'perfil' => $existe_usr->id_rol
				
			); 
			$this->session->set_userdata($data);
			$this->dashboard();
		}
	}

	public function dashboard() {
		$this->load->view('dashboard');
	}

	

}
