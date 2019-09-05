<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function login($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$login=$this->db->get('usuarios')->row_array();
		return $login;
	}
}