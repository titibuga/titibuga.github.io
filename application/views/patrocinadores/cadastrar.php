<div style="padding: 40px 15px; text-align: center;">

  <h1>Cadastro de Patrocinador</h1>
  <p class="lead">Para cadastrar um novo patrocinador, preencha os campos abaixo.</p>

  <?php echo form_open_multipart('patrocinadores/salvar', array('class' => 'form-horizontal')); ?>

    <div class='form-group'>
      <label for='nome' class='col-sm-2 control-label'>Nome</label>
      <div class='col-sm-10'>
        <input type='text' name='nome' id='nome' required 
          title='Por favor, este campo deve ser preenchido.'
          class='form-control interativo' placeholder='Nome do Patrocinador'/>
      </div>
    </div>

    <div class='form-group'>
      <label for='logo' class='col-sm-2 control-label'>Logo</label>
      <div class='col-sm-10'>
        <input name='logo' id='logo' type='file' />
      </div>
    </div>

    <div class='form-group'>
      <label for='categoria' class='col-sm-2 control-label'>Categoria</label>
      <div class='col-sm-10'>
        <div class='input-group'>
          <select name='categoria' id='categoria' class='form-control' required>
            <?php foreach ($categorias as $categoria)
            {
              echo "<option value='$categoria->id'>$categoria->nome ($categoria->valor)</option>";
            } ?>
          </select>
        </div>
      </div>
    </div>

    <div class='form-group'>
      <label for='email' class='col-sm-2 control-label'>Email</label>
      <div class='col-sm-10'>
        <input type='email' name='email' id='email' required
          title='Por favor, este campo deve ser preenchido'
          class='form-control interativo' placeholder='Email para contato'/>
      </div>
    </div>

    <div class='form-group'>
      <label for='telefone' class='col-sm-2 control-label'>Telefone</label>
      <div class='col-sm-10'>
        <input type='tel' name='telefone' id='telefone' required 
          pattern='(\+\d\d)?(\s)?(\(?[0-9]{2,3}\)?)?(\s)?(([0-9]{8,9})||([0-9]{4,5}-[0-9]{4}))'
          title='Por favor, este campo deve ser preenchido.'
          class='form-control interativo' placeholder='Telefone para contato'/>
      </div>
    </div>

    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>

  <?php echo form_close(); ?>

</div>