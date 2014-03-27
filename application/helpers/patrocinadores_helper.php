<?php

function listar_patrocinadores( $categoria_model, $patrocinadores)
{
  $html = "";
  foreach ($patrocinadores as $patrocinador)
  {
    $html .= "<p>";
    $html .= img (array(
      'src' => 'uploads/' . $patrocinador->logo_path,
      'style' => 'width: 80px; height: 80px; margin-right: 8px',
      'class' => 'img-thumbnail'));
    $html .= "$patrocinador->nome (" . 
      nome_da_categoria ($categoria_model, $patrocinador->categoria) . ")</p>";
  }
  return $html;
}

?>