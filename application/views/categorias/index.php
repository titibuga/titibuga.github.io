<div style="padding: 40px 15px; text-align: center;">
  <div class="jumbotron">
    <h1>Categorias</h1>

    <h4><?php echo listar_categorias( $categorias); ?></h4>

    <p>
      <?php echo anchor('/categorias/cadastrar', 'Nova Categoria', 
        array('class' => 'btn btn-primary btn-lg')); ?>
    </p>
  </div>

</div>