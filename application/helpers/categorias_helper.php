<?php 

function listar_categorias( $categorias)
{
  $html = "";
  foreach ($categorias as $categoria)
  {
    $html .= "<p><b>$categoria->nome:</b> $categoria->descricao";
    $html .= anchor( 'categorias/deletar/' . $categoria->id, 'Deletar', array('class'=>"btn btn-danger"));
    $html .= "</p>";
  }
  return $html;
}

function nome_da_categoria( $categoria_model, $categoria_id)
{
  $categoria = $categoria_model->buscar_por_id( $categoria_id);
  return $categoria->nome;
}
?>