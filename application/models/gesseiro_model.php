<?php
class gesseiro_model extends CI_Model
{
	public function index()
	{
		$this->db->select('*');
		$this->db->from('gesseiro');
		return $this->db->get()->result_array();
	}

	public function novo($dados)
	{
		return $this->db->insert('gesseiro', $dados);
	}
}

