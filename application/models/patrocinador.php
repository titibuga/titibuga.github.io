<?php

class Patrocinador extends CI_Model {

  var $nome              = '';
  var $logo_path         = '';
  var $categoria         = '';
  var $email             = '';
  var $telefone          = '';
  var $data_de_cadastro  = '';

  function __construct()
  {
    parent::__construct();
  }

  function lista_de_atributos()
  {
    $atributos = array(
        'nome'      => 'Nome',
        'logo'      => 'Logo',
        'categoria' => 'Categoria',
        'email'     => 'Email para contato',
        'telefone'  => 'Telefone para contato'
      );

    return $atributos;
  }

  function listar()
  {
    $query = $this->db->get( 'patrocinador');
    $fornecedores = array();

    foreach ($query->result() as $registro)
      array_push ($fornecedores, $registro);
    return $fornecedores;
  }

  function cadastrar( $atributos)
  {
    $this->nome             = $atributos['nome'];
    $this->logo_path        = $atributos['logo'];
    $this->categoria        = $atributos['categoria'];
    $this->email            = $atributos['email'];
    $this->telefone         = $atributos['telefone'];
    $this->data_de_cadastro = date("Y-m-d H:i:s");
    $this->db->insert( 'patrocinador', $this);
  }
}

?>