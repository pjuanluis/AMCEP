<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class web extends CI_Controller {

	function  __construct() {
		parent:: __construct();	
	}


	public function inicio() {
		$this->load->view('index');
	}

	public function aviso(){
		$this->load->view('aviso');
	}
	
	public function carrito(){
		$this->load->view('carrito');
	}

}
