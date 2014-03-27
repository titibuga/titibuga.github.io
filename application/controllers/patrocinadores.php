<?php

class Patrocinadores extends CI_Controller {

  private $dados = array();

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Patrocinador');
    $this->dados['titulo'] = 'Patrocinadores';
  }

  public function index()
  {
    $this->load->helper(array('patrocinadores', 'categorias', 'form', 'html'));
    $this->load->model( 'Categoria');
    $this->dados['view'] = 'patrocinadores/index';

    $this->dados['Categoria'] = $this->Categoria; /* utilizado para pegar o nome a partir do id. */
    $this->dados['patrocinadores'] = $this->Patrocinador->listar();
    $this->load->view('template', $this->dados);
  }

  public function cadastrar()
  {
    $this->load->helper( array('patrocinadores', 'form'));
    $this->load->model( 'Categoria');

    $this->dados['categorias'] = $this->Categoria->listar();

    $this->dados['view'] = 'patrocinadores/cadastrar';
    $this->load->view('template', $this->dados);
  }

  public function salvar()
  {
    $this->load->model('Patrocinador');

    $nome_arquivo = $this->input->post( 'nome') . time();
    $_POST['logo'] = $this->_logo_upload( $nome_arquivo);

    $this->Patrocinador->cadastrar( $this->input->post());
    redirect( '/categorias/index');
  }

  private function _logo_upload( $nome_arquivo)
  {
    $config['upload_path']    = './uploads/';
    $config['file_name']      = $nome_arquivo;
    $config['allowed_types']  = 'gif|jpg|png';
    $config['max_size']       = '100';
    $config['max_width']      = '350';
    $config['max_height']     = '350';
    $this->load->library('upload', $config);

    if( !$this->upload->do_upload('logo')) return $this->upload->display_errors();

    $data = $this->upload->data(); 
    return $data['file_name'];
  }
}

?>
