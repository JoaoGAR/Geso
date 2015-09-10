<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gesseiro extends CI_Controller {

public function index()
{
	$this->load->view('cadastro');
}

	public function novo()
	{
		$dados = array(
			'nome'=>$this->input->post('nome'),
			'telefone¹'=>$this->input->post('telefoneA'),
			'telefone²' => $this->input->post('telefoneB'),
			'telefone³' => $this->input->post('telefoneC'),
			'endereco'=>$this->input->post('endereco'),
			'descricao'=>$this->input->post('descricao')
			);
		print_r($dados);
		//$this->load->model("gesseiro_model");
		//$result = $this->gesseiro_model->novo($dados);
		//$this->load->view('cadastro');
	}

}

