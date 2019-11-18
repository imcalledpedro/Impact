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
		$password = $this->input->post('password');
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
			'password' => $this->input->post("password")	
		);
		$this->load->model('Usuario_model');
		$this->Usuario_model->cadastrarUsuario($dados);
	}

	public function exibirDados() {
		$email = $this->session->userdata('email');
		$this->load->model('Usuario_model');
		$nome = $this->Usuario_model->puxarNomeDoCara($email);
		$senha = $this->Usuario_model->puxarSenhaDoCara($email);
		$dados = array('nome' => $nome, 'email' => $email,'senha' => $senha,);
		$this->load->view('d_perfil', $dados);
	}

	// public function editarDados() {
	// 	// $dados = array(
	// 	// 	'name' => $this->input->post("name"),
	// 	// 	'email' => $this->input->post("email"),
	// 	// 	'password' => $this->input->post("password")	
	// 	// );

		
	// }

// parte de smauel
	public function editarDados(){
		$this->load->model("Operacoes");
		
		$conta_contrato = $this->input->post("conta_contrato");
		$usuario = $this->input->post("usuario");
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");

		$usuarioAtual=$this->session->userdata('usuario');
		$nomeAtual=$this->Operacoes->nomeCompleto($usuarioAtual);
		$contaContratoAtual=$this->Operacoes->contaContrato($usuarioAtual);
		$emailAtual=$this->Operacoes->email($usuarioAtual);

		//Esse array passa os campos a serem atualizados na table usuario;
		$dadosUpdate = array();
			if($conta_contrato!=$contaContratoAtual && $conta_contrato!=NULL && $conta_contrato!=" ") {
				$dadosUpdate['conta_contrato'] = $conta_contrato;
			}if ($usuario!=$usuarioAtual && $usuario!=NULL && $usuario!=" ") {
				$dadosUpdate['usuario'] = $usuario;
			}if ($nome!=$nomeAtual && $nome!=NULL && $nome!=" ") {
				$dadosUpdate['nome'] = $nome;
			}if ($email!=$emailAtual && $email!=NULL && $email!=" ") {
				$dadosUpdate['email'] = $email;
			}
		$this->load->model("Usuarios_model");
		$nome_de_usuario_existente = $this->Usuarios_model->atualizarDados($dadosUpdate, $usuarioAtual);
		if ($nome_de_usuario_existente) {
			redirect('usuario?error=1');	//Nome de usuário já existe
		}else{
			if ($usuario!=$usuarioAtual && $usuario!=NULL && $usuario!=" ") {
				$this->session->set_userdata('usuario', $usuario);
				//Sobrescreve a seção de usuário
			}
			redirect('usuario');
		}
	}
}