<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function  __construct() {
		parent:: __construct();	
	}


	public function inicio() {
		$this->load->view('index');
	}

	public function aviso(){
		$this->load->view('aviso');
	}
	

}
