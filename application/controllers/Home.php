<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
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

	public function deletarProduto() {
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('produtos');
		redirect('produtos');
	}

	public function deletarPublicacao() {
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('publicacoes');
		redirect('publicacoes');
	}

	public function exibirPublicacao() {
		$id = $this->input->get('id');

		$this->load->model('Publicacoes_model');
		
		$dados = array(
			'titulo' => $this->Publicacoes_model->puxarTitulo($id),
			'descricao' => $this->Publicacoes_model->puxarDescricao($id),
			'texto' => $this->Publicacoes_model->puxarTexto($id),
			'data' => $this->Publicacoes_model->puxarData($id),
		);

		$this->load->view('publicacao', $dados);
	}

	public function exibirProduto() {
		$id = $this->input->get('id');

		$this->load->model('Produtos_model');
		
		$dados = array(
			'titulo' => $this->Produtos_model->puxarNome($id),
			'descricao' => $this->Produtos_model->puxarDescricao($id),
			'categoria' => $this->Produtos_model->puxarCategoria($id),
			'link1' => $this->Produtos_model->puxarLink1($id),
			'link2' => $this->Produtos_model->puxarLink2($id),
			'link3' => $this->Produtos_model->puxarLink3($id),
			'link4' => $this->Produtos_model->puxarLink4($id),
		);

		$this->load->view('produto', $dados);
	}

}
