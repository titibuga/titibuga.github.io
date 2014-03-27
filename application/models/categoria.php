<?php

class Categoria extends CI_Model {

  var $nome      = '';
  var $descricao = '';
  var $valor     = '';

  function __construct()
  {
    parent::__construct();
  }

  function listar()
  {
    $query = $this->db->get( 'categoria');
    $categorias = array();

    foreach ($query->result() as $registro)
      array_push ($categorias, $registro);
    return $categorias;
  }

  function cadastrar( $atributos)
  {
    $this->nome      = $atributos['nome'];
    $this->descricao = $atributos['descricao'];
    $this->valor     = $atributos['valor'];
    $this->db->insert( 'categoria', $this);
  }

  function buscar_por_id( $id)
  {
    return $this->db->get_where( 'categoria', array( 'id' => $id))->row();
  }

  function deletar( $id)
  {
    $this->db->delete( 'categoria', array( 'id' => $id));
  }
}

?>