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
}