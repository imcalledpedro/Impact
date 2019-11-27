<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function logar()	{
		$this->load->view('login');
	}

	public function cadastrar() {
		$this->load->view('cadastro');
	}

	public function autenticar() {
		$this->load->model('Usuario_model');

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$nome = $this->Usuario_model->puxarNomeDoCara($email);
		$login = $this->Usuario_model->login($email,$password);

		if ($login) {
			$this->session->set_userdata('login',$login);
			$this->session->set_userdata('email',$email);
			$this->session->set_userdata('nome',$nome);
			redirect('dashboard'); 
		} else {
			redirect('login');
		}
	}

	public function encerrar() {
		$this->session->sess_destroy();
		redirect('login');	
	}

	public function cadastrarUsuario(){
		$dados = array(
			'name' => $this->input->post("name"),
			'email' => $this->input->post("email"),
			'password' => md5($this->input->post("password"))	
		);
		$this->load->model('Usuario_model');
		$this->Usuario_model->cadastrarUsuario($dados);
	}

	public function deletarUsuario() {
		$email = $this->session->userdata('email');
		$this->db->where('email', $email);
		$this->db->delete('usuarios');
		redirect('login');
	}

	public function exibirDados() {
		$email = $this->session->userdata('email');
		$this->load->model('Usuario_model');
		$nome = $this->Usuario_model->puxarNomeDoCara($email);
		$senha = $this->Usuario_model->puxarSenhaDoCara($email);
		$dados = array('nome' => $nome, 'email' => $email,'senha' => $senha,);
		$this->load->view('d_perfil', $dados);
	}

	public function editarDados(){
		$dados = array(
			'name' => $this->input->post("name"),
			'email' => $this->input->post("email"),
			'password' => $this->input->post("password")	
		);

		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$password = $this->input->post('password');

		$nameAnterior = $this->session->userdata('nome');

		$this->db->where('name',$nameAnterior);
		$this->db->update('usuarios', $dados);
			
		$this->session->set_userdata('nome',$name);
		$this->session->set_userdata('email',$email);

		redirect('dashboard/perfil');
	}
}