<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Views extends CI_Controller {

	public function dashboard() {
		if (isset($_SESSION['login'])) {
			$this->load->model('publicacoes_model', 'publicacoes');
			$data1['publicacoes'] = $this->publicacoes->countPublicacoes();
			$this->load->model('produtos_model', 'produtos');
			$data2['produtos'] = $this->produtos->countProdutos();
			$this->load->view('dashboard', $data1, $data2);
		}else {
			#code...
		}
	}

	public function d_produtos() {
		if (isset($_SESSION['login'])) {
			$this->load->model('produtos_model', 'produtos');
			$data['produtos'] = $this->produtos->getProdutos();
			$this->load->view('d_produtos', $data);
		}else {
			#code...
		}
	}

	public function d_publicacoes() {
		if (isset($_SESSION['login'])) {
			$this->load->model('publicacoes_model', 'publicacoes');
			$data['publicacoes'] = $this->publicacoes->getPublicacoes();
			$this->load->view('d_publicacoes', $data);
		}else {
			#code...
		}
	}

	public function cadastrar(){
		$this->load->view('cadastro');
	}

	public function publicacao($id) {
		$this->load->model('Publicacoes_model');
		$dados = array(
			'titulo' => $this->load->model('Publicacoes_model', 'puxarTitulo'),
			'descricao' => $this->load->model('Publicacoes_model', 'puxarDescricao'),
			'texto' => $this->load->model('Publicacoes_model', 'puxarTexto'),
			'data' => $this->load->model('Publicacoes_model', 'puxarData')
		);
		$this->load->view('publicacao', $dados);
	}

	public function produtos($id) {
		$this->load->model('Produtos_model');
		$dados = array(
			'nome' => $this->load->model('Produtos_model', 'puxarNome'),
			'descricao' => $this->load->model('Produtos_model', 'puxarDescricao'),
			'categoria' => $this->load->model('Produtos_model', 'puxarCategoria'),
			'link1' => $this->load->model('Produtos_model', 'puxarLink1'),
			'link2' => $this->load->model('Produtos_model', 'puxarLink2'),
			'link3' => $this->load->model('Produtos_model', 'puxarLink3'),
			'link4' => $this->load->model('Produtos_model', 'puxarLink4'),
			'link_imagem' => $this->load->model('Produtos_model', 'puxarImagem'),
		);
		$this->load->view('produtos', $dados);
	}
}
