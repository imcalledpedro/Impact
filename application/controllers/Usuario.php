<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function logar()
	{
		$this->load->view('login');
	}

	public function cadastrar()
	{
		$this->load->view('cadastro');
	}

	public function autenticar()
	{
		$this->load->model('Usuario_model');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$login = $this->Usuario_model->login($email,$password);
		if ($login) {
			// echo "deu certo";
			$this->session->set_userdata('login',$login);
			// $this->session->set_flashdata('success','Logado com sucesso!');
			redirect('dashboard'); 
		} else {
			redirect('login');
		}
	}

	public function encerrar()
	{
		$this->session->sess_destroy();
		redirect('login');	
	}
}