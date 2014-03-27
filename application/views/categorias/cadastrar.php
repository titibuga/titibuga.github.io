<div style="padding: 40px 15px; text-align: center;">

  <h1>Cadastro de Categorias</h1>
  <p class="lead">Para cadastrar uma nova categoria, preencha os campos abaixo.</p>

  <?php echo form_open('categorias/salvar', array('class' => 'form-horizontal')); ?>
    
    <div class='form-group'>
      <label for='nome' class='col-sm-2 control-label'>Nome</label>
      <div class='col-sm-10'>
        <input type='text' name='nome' id='nome' required 
          title='Por favor, este campo deve ser preenchido'
          class='form-control interativo' placeholder='Nome da categoria'/>
      </div>
    </div>

    <div class='form-group'>
      <label for='descricao' class='col-sm-2 control-label'>Descrição</label>
      <div class='col-sm-10'>
        <textarea name='descricao' id='descricao' required 
          title='Por favor, este campo deve ser preenchido'
          class='form-control interativo' placeholder='Descrição da categoria'></textarea>
      </div>
    </div>

    <div class='form-group'>
      <label for='valor' class='col-sm-2 control-label'>Valor</label>
      <div class='col-sm-10'>
        <div class='input-group'>
          <input type='number' name='valor' id='valor'
            title='Por favor, este campo deve ser preenchido'
            class='form-control interativo'
            placeholder='Faixa de preços da categoria.'
            required pattern='(\d*,?\.?\d+)+' min='0' />
          <span class='input-group-addon'>Reais</span>
        </div>
      </div>
    </div>

    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>

  <?php echo form_close(); ?>

</div>