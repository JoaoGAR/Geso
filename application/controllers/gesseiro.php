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
			'telefoneA'=>$this->input->post('telefoneA'),
			'telefoneB' => $this->input->post('telefoneB'),
			'telefoneC' => $this->input->post('telefoneC'),
			'endereco'=>$this->input->post('endereco'),
			'descricao'=>$this->input->post('descricao')
			);
		$this->load->model("gesseiro_model");
		$result = $this->gesseiro_model->novo($dados);

		if ($result) 
		{
			$this->session->set_flashdata("sucesso" , "sucesso");
			redirect ("gesseiro");
		} 
		elseif (!$result) 
		{
			$this->session->set_flashdata("erro" , "erro");
			redirect ("gesseiro");
		}	
	}
}

