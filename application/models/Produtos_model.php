<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model
{
	public function getProdutos()
	{
		$query = $this->db->get('produtos');
		return $query->result();
	}

	public function countProdutos()
	{
		$query = $this->db->get('produtos');

		$contador = 0;

		foreach ($query as $publicacao) {
			$contador++;
		}

		return $contador;
	}

	public function puxarNome($id) {
		$query = $this->db->query("SELECT nome FROM produtos WHERE id = '".$id."'");
		$row = $query->row();
		return $row->nome;
	}
	public function puxarDescricao($id) {
		$query = $this->db->query("SELECT descricao FROM produtos WHERE id = '".$id."'");
		$row = $query->row();
		return $row->descricao;
	}
	public function puxarCategoria($id) {
		$query = $this->db->query("SELECT categoria FROM produtos WHERE id = '".$id."'");
		$row = $query->row();
		return $row->categoria;
	}
	public function puxarLink1($id) {
		$query = $this->db->query("SELECT link_1 FROM produtos WHERE id = '".$id."'");
		$row = $query->row();
		return $row->link_1;
	}
	public function puxarLink2($id) {
		$query = $this->db->query("SELECT link_2 FROM produtos WHERE id = '".$id."'");
		$row = $query->row();
		return $row->link_2;
	}
	public function puxarLink3($id) {
		$query = $this->db->query("SELECT link_3 FROM produtos WHERE id = '".$id."'");
		$row = $query->row();
		return $row->link_3;
	}
	public function puxarLink4($id) {
		$query = $this->db->query("SELECT link_4 FROM produtos WHERE id = '".$id."'");
		$row = $query->row();
		return $row->link_4;
	}
	public function puxarImagem($id) {
		$query = $this->db->query("SELECT link_imagem FROM produtos WHERE id = '".$id."'");
		$row = $query->row();
		return $row->link_imagem;
	}
}