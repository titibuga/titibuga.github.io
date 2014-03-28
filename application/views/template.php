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
  <link href="<?php echo $this->config->item('base_url'); ?>/assets/css/navbar.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('base_url'); ?>/assets/css/inicio.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('base_url'); ?>/assets/css/colabore.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('base_url'); ?>/assets/css/common.css" rel="stylesheet">
  <link href="<?php echo $this->config->item('base_url'); ?>/assets/css/validadores.css" rel="stylesheet">
  
  <!-- Jquery -->
  <script src="<?php echo $this->config->item('jquery_file'); ?>"></script>
</head>

<!-- Bootstrap starter template -->
<body style="padding-top: 50px;">
  
  <div class="masthead clearfix">
        <div class="inner">
            <h3 class="masthead-brand">
              <a class="navbar-brand" href="<?php echo $this->config->item('base_url'); ?>">Encontro do BCC - 40 anos</a>
            </h3>
            <ul class="nav masthead-nav">
              <li <?php if($titulo == 'Inicio') echo 'class="active"'; ?>>
                <?php echo anchor($this->config->item('base_url'), 'Início'); ?>
              </li>
              
              <li <?php if($titulo == 'Palestras') echo 'class="active"'; ?>>
                <?php echo anchor('informacoes/palestras', 'Palestras'); ?>
              </li>

              <li <?php if($titulo == 'Colabore Conosco') echo 'class="active"'; ?>>
                <?php echo anchor('informacoes/colabore', 'Colabore!'); ?>
              </li>

              <li <?php if($titulo == 'Categorias') echo 'class=""active"'; ?>>
                <?php echo anchor('categorias', '(cadastrar categorias)'); ?>
              </li>
            </ul>
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
