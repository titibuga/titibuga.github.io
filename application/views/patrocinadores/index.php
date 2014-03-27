<div style="padding: 40px 15px; text-align: center;">
  <div class="jumbotron">
    <h1>Patrocinadores</h1>

    <h4 style="margin: 0 auto; padding-left: 80px; width: 600px; text-align: left"><?php echo listar_patrocinadores( $Categoria, $patrocinadores); ?></h4>
    <hr />
    <p>
      <?php echo anchor('/patrocinadores/cadastrar', 'Novo Patrocinador', 
        array('class' => 'btn btn-primary btn-lg')); ?>
    </p>
  </div>

</div>