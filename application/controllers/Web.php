<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	public function inicio() {
		$this->load->view('index');
	}
}
