<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Views extends CI_Controller {

	public function dashboard()
	{
		if (isset($_SESSION['login'])) {
			// $this->load->model('produtos_model', 'produtos');
			// $data1['produtos'] = $this->produtos->getProdutos();

			// $this->load->model('publicacoes_model', 'publicacoes');
			// $data2['publicacoes'] = $this->publicacoes->getPublicacoes();

			// $this->load->view('dashboard', $data1, $data2);


			$this->load->model('publicacoes_model', 'publicacoes');

			$data1['publicacoes'] = $this->publicacoes->countPublicacoes();

			// $this->load->view('dashboard', $data);
			$this->load->model('produtos_model', 'produtos');

			$data2['produtos'] = $this->produtos->countProdutos();

			$this->load->view('dashboard', $data1, $data2);
		}else {
			#code...
		}

	}

	public function produtos()
	{
		if (isset($_SESSION['login'])) {
			$this->load->model('produtos_model', 'produtos');

			$data['produtos'] = $this->produtos->getProdutos();

			$this->load->view('produtos', $data);
		}else {
			#code...
		}
		
	}

	public function publicacoes()
	{
		if (isset($_SESSION['login'])) {
			$this->load->model('publicacoes_model', 'publicacoes');

			$data['publicacoes'] = $this->publicacoes->getPublicacoes();

			$this->load->view('publicacoes', $data);
		}else {
			#code...
		}
		
	}
}
