<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Informacoes extends CI_Controller {

	public function index()
	{
		$dados = array(
			'titulo' 	=> 'Inicio',
			'view'		=> 'inicio');
		$this->load->view('template', $dados);
	}

	public function colabore()
	{
		$dados = array(
			'titulo' 	=> 'Colabore Conosco',
			'view'		=> 'colabore_conosco');
		$this->load->view('template', $dados);
	}

	public function palestras()
	{
		$dados = array(
			'titulo' 	=> 'Palestras',
			'view'		=> 'palestras');
		$this->load->view('template', $dados);
	}
}
