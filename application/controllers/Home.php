<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('publicacoes_model', 'publicacoes');

		$data['publicacoes'] = $this->publicacoes->getPublicacoes();

		$this->load->view('index', $data);
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
}
