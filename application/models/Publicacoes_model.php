<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicacoes_model extends CI_Model
{
	public function getPublicacoes()
	{
		$query = $this->db->get('publicacoes');
		return $query->result();
	}

	public function countPublicacoes()
	{
		$query = $this->db->get('publicacoes');

		$contador = 0;

		foreach ($query as $publicacao) {
			$contador++;
		}

		return $contador;
	}
}