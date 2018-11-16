<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_Model extends CI_Model {

       public function __construct() {
        $this->load->database();
       }

       public function existeUsr($correo, $pass) {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('correo', $correo);
        $this->db->where('password', $pass);
        $query = $this->db->get();

        if($query->num_rows() == 1) {
                return $query->row();
       }else {
        $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
        redirect(base_url().'login','refresh');
       }

       }

}