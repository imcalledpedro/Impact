<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function login($email,$password) {
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$login=$this->db->get('usuarios')->row_array();
		return $login;
	}

	public function cadastrarUsuario($dados=NULL) {
		if ($dados!=NULL) {
			$this->db->insert('usuarios',$dados);
		}redirect('login');	
		
	}

	// public function editarUsuario($dados, $nameAnterior) {
	// 	$this->db->where('na',$nameAnterior);
	// 	$this->db->update('usuarios', $dados);
	// 	// return $dados['name'];

	// 	// redirect('dashboard/perfil');
	// }

	public function puxarNomeDoCara($email) {
		$query = $this->db->query("SELECT name FROM usuarios WHERE email = '".$email."'");
		$row = $query->row();
		return $row->name;
	}

	public function puxarSenhadoCara($email) {
		$query = $this->db->query("SELECT password FROM usuarios WHERE email = '".$email."'");
		$row = $query->row();
		return $row->password;
	}

}