<!DOCTYPE html>
<html lang="pt">

<head>
  <!-- Bootstrap template -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title><?php echo $titulo; ?></title>

  <!-- Bootstrap -->
  <link href="<?php echo $this->config->item('bootstrap_path'); ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('base_url'); ?>/assets/css/validadores.css" rel="stylesheet">
  
  <!-- Jquery -->
  <script src="<?php echo $this->config->item('jquery_file'); ?>"></script>
</head>

<!-- Bootstrap starter template -->
<body style="padding-top: 50px;">
  
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Alterar navegação</span>
        </button>
        <a class="navbar-brand" href="<?php echo $this->config->item('base_url'); ?>">Encontro BCC</a>
      </div>
      
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li <?php if($titulo == 'Patrocinadores') echo 'class=""active"'; ?>>
            <?php echo anchor('patrocinadores', 'Patrocinadores'); ?>
          </li>
          <li <?php if($titulo == 'Categorias') echo 'class=""active"'; ?>>
            <?php echo anchor('categorias', 'Categorias'); ?>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <div class="container">
    <?php $this->load->view($view); ?>
  </div>

  <!-- Bootstrap core JavaScript -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo $this->config->item('bootstrap_path'); ?>/js/bootstrap.min.js"></script>

  <!-- Usado para validar as ações do usuário nos formulários. -->
  <script src="<?php echo $this->config->item('base_url'); ?>assets/js/validador.js"></script>

</body>

</html>