<?php

class Categorias extends CI_Controller {

  private $dados = array();

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Categoria');
    $this->dados['titulo'] = 'Categorias';
  }

  public function index()
  {
    $this->load->helper( array( 'categorias', 'url'));
    $this->dados['view'] = 'categorias/index';
    $this->dados['categorias'] = $this->Categoria->listar();
    $this->load->view('template', $this->dados);
  }

  public function cadastrar()
  {
    $this->load->helper('form');
    $this->dados['view'] = 'categorias/cadastrar';
    $this->load->view('template', $this->dados);
  }

  public function salvar()
  {
    $this->Categoria->cadastrar( $this->input->post());
    redirect( '/categorias/index');
  }

  public function deletar()
  {
    $this->load->helper('url');
    $this->Categoria->deletar( $this->uri->segment(3));
    redirect( '/categorias/index');
  }
}

?>