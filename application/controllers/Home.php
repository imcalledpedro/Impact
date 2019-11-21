<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->model('publicacoes_model', 'publicacoes');
		$data['publicacoes'] = $this->publicacoes->getPublicacoes();
		$this->load->view('index', $data);
	}

	public function publicacao() {
		$this->load->model('publicacoes_model', 'publicacoes');
		$data['publicacoes'] = $this->publicacoes->getPublicacoes();
		$this->load->view('publicacao', $data);
	}

	public function produtos() {
		$this->load->model('Produtos_model', 'produtos');
		$data['produtos'] = $this->produtos->getProdutos();
		$this->load->view('produtos', $data);
	}

	public function adicionarProduto(){
		$this->load->view('d_adicionarproduto');
	}

	public function cadastrarProduto(){
		$dados = array(
			'nome' => $this->input->post("nome"),
			'descricao' => $this->input->post("descricaoProduto"),
			'categoria' => $this->input->post("categoria"),
			'link_1' => $this->input->post("link1"),	
			'link_2' => $this->input->post("link2"),
			'link_3' => $this->input->post("link3"),
			'link_4' => $this->input->post("link4"),
			'link_Imagem' => $this->input->post("linkImagem"),			
		);
		$this->load->model('Produtos_model');
		$this->Produtos_model->cadastrarProdutos($dados);
	}

	public function editarProduto(){
		$dados = array(
			'id' => $this->input->post('id'),
			'nome' => $this->input->post("nome"),
			'descricao' => $this->input->post("descricao"),
			'categoria' => $this->input->post("categoria"),
			'link_1' => $this->input->post("link1"),
			'link_2' => $this->input->post("link2"),
			'link_3' => $this->input->post("link3"),
			'link_4' => $this->input->post("link4"),
			'link_imagem' => $this->input->post("linkImagem"),
		);

		$id = $this->input->post('id');

		$this->db->where('id',$id);
		$this->db->update('produtos', $dados);

		$this->load->view('d_editarproduto', $dados);
	}

	// public function editarDados(){
	// 	$dados = array(
	// 		'name' => $this->input->post("name"),
	// 		'email' => $this->input->post("email"),
	// 		'password' => $this->input->post("password")	
	// 	);

	// 	$email = $this->input->post('email');
	// 	$name = $this->input->post('name');
	// 	$password = $this->input->post('password');

	// 	$nameAnterior = $this->session->userdata('nome');

	// 	// $this->load->model('Usuario_model');
	// 	// $this->Usuario_model->editarUsuario($dados, $nameAnterior);

	// 	$this->db->where('name',$nameAnterior);
	// 	$this->db->update('usuarios', $dados);
			
	// 	$this->session->set_userdata('nome',$name);
	// 	$this->session->set_userdata('email',$email);

	// 	redirect('dashboard/perfil');
	// }

	public function deletarProduto() {
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('produtos');
		redirect('dashboard/produtos');
	}

	public function exibirProdutosEditar() {
		$id = $this->input->get('id');
		$this->load->model('Produtos_model');
		$dados = array(
			'id' => $this->input->get('id'),
			'nome' => $this->Produtos_model->puxarNome($id),
			'descricao' => $this->Produtos_model->puxarDescricao($id),
			'categoria' => $this->Produtos_model->puxarCategoria($id),
			'link_1' => $this->Produtos_model->puxarLink1($id),
			'link_2' => $this->Produtos_model->puxarLink2($id),
			'link_3' => $this->Produtos_model->puxarLink3($id),
			'link_4' => $this->Produtos_model->puxarLink4($id),
			'link_imagem' => $this->Produtos_model->puxarImagem($id),
		);
		$this->load->view('d_editarproduto', $dados);
	}

	public function exibirProduto() {
		$id = $this->input->get('id');
		$this->load->model('Produtos_model');
		$dados = array(
			'id' => $this->input->get('id'),
			'nome' => $this->Produtos_model->puxarNome($id),
			'descricao' => $this->Produtos_model->puxarDescricao($id),
			'categoria' => $this->Produtos_model->puxarCategoria($id),
			'link1' => $this->Produtos_model->puxarLink1($id),
			'link2' => $this->Produtos_model->puxarLink2($id),
			'link3' => $this->Produtos_model->puxarLink3($id),
			'link4' => $this->Produtos_model->puxarLink4($id),
			'link_imagem' => $this->Produtos_model->puxarImagem($id)
		);
		$this->load->view('produto', $dados);
	}

	public function adicionarPublicacao(){
		$this->load->view('d_adicionarpublicacao');
	}

	public function cadastrarPublicacao(){
		$dados = array(
			'titulo' => $this->input->post("titulo"),
			'descricao' => $this->input->post("descricao"),
			'texto_completo' => $this->input->post("texto_completo"),
			'data_publicacao' => $this->input->post("data_publicacao"),	
			'anexo' => $this->input->post("anexo"),
		);
		$this->load->model('Publicacoes_model');
		$this->Publicacoes_model->cadastrarPublicacoes($dados);
	}

	// public function editarPublicacao(){
	// 	$this->load->view('d_editarpublicacao');
	// }
	
	// public function editarProduto(){
	// 	$dados = array(
	// 		'id' => $this->input->post('id'),
	// 		'nome' => $this->input->post("nome"),
	// 		'descricao' => $this->input->post("descricao"),
	// 		'categoria' => $this->input->post("categoria"),
	// 		'link_1' => $this->input->post("link1"),
	// 		'link_2' => $this->input->post("link2"),
	// 		'link_3' => $this->input->post("link3"),
	// 		'link_4' => $this->input->post("link4"),
	// 		'link_imagem' => $this->input->post("linkImagem"),
	// 	);

	// 	$id = $this->input->post('id');

	// 	$this->db->where('id',$id);
	// 	$this->db->update('produtos', $dados);

	// 	$this->load->view('d_editarproduto', $dados);
	// }

	public function editarPublicacao(){
		$dados = array(
			'id' => $this->input->post('id'),
			'titulo' => $this->input->post("titulo"),
			'descricao' => $this->input->post("descricao"),
			'texto_completo' => $this->input->post("texto_completo"),
			'data_publicacao' => $this->input->post("data_publicacao"),	
			'anexo' => $this->input->post("anexo"),
		);

		$id = $this->input->post('id');
		
		$this->db->where('id',$id);
		$this->db->update('publicacoes', $dados);

		$this->load->view('d_editarpublicacao', $dados);
	}

	public function deletarPublicacao() {
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('publicacoes');
		redirect('dashboard/publicacoes');
	}

	public function exibirPublicacaoEditar() {
		$id = $this->input->get('id');
		$this->load->model('Publicacoes_model');
		$dados = array(
			'id' => $this->input->get('id'),
			'titulo' => $this->Publicacoes_model->puxarTitulo($id),
			'descricao' => $this->Publicacoes_model->puxarDescricao($id),
			'texto_completo' => $this->Publicacoes_model->puxarTexto($id),
			'data_publicacao' => $this->Publicacoes_model->puxarData($id),
			'anexo' => $this->Publicacoes_model->puxarAnexo($id),
		);
		$this->load->view('d_editarpublicacao', $dados);
	}

	public function exibirPublicacao() {
		$id = $this->input->get('id');
		$this->load->model('Publicacoes_model');
		$dados = array(
			'id' => $this->input->get('id'),
			'titulo' => $this->Publicacoes_model->puxarTitulo($id),
			'descricao' => $this->Publicacoes_model->puxarDescricao($id),
			'texto' => $this->Publicacoes_model->puxarTexto($id),
			'data' => $this->Publicacoes_model->puxarData($id),
		);
		$this->load->view('publicacao', $dados);
	}
}