<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicacoes_model extends CI_Model
{
	public function getPublicacoes()
	{
		$this->db->order_by('id','DESC');
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

	public function puxarTitulo($id) {
		$query = $this->db->query("SELECT titulo FROM publicacoes WHERE id = '".$id."'");
		$row = $query->row();
		return $row->titulo;
	}
	public function puxarDescricao($id) {
		$query = $this->db->query("SELECT descricao FROM publicacoes WHERE id = '".$id."'");
		$row = $query->row();
		return $row->descricao;

	}
	public function puxarTexto($id) {
		$query = $this->db->query("SELECT texto_completo FROM publicacoes WHERE id = '".$id."'");
		$row = $query->row();
		return $row->texto_completo;
		//return $query->texto;

	}
	public function puxarData($id) {
		$query = $this->db->query("SELECT data_publicacao FROM publicacoes WHERE id = '".$id."'");
		$row = $query->row();
		// return $row->data;
		return $row->data_publicacao;

	}
}