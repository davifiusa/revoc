<?php
  require("../../requires/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=$linkHome?>" title="Ir para a página inicial" class="tip-bottom"><i class="icon-home"></i> Inicío</a> <a href="<?=$linkFornecedores?>" class="tip-bottom">Fornecedor</a> <a href="#" class="current">Incluir fornecedor</a> </div>
  </div>
  <div class="container-fluid" style="width: 2200px;">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box" width="80%">
          <div class="alert alert-success" style="display: none;">
            <button class="close" data-dismiss="alert">×</button>
            <strong>Fornecedor cadastrado com sucesso!</strong>
          </div>
          <div class="alert alert-error" style="display: none;">
            <button class="close" data-dismiss="alert">×</button>
            <strong>Preencha todos os campos</strong>
          </div>
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Cadastrar um novo Fornecedor</h5>
          </div>
          <div class="widget-content nopadding">
            <form  id="formFornecedores" method="post" class="form-horizontal" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label"> Nome Fornecedor :</label>
                <div class="controls">
                  <input type="text" class="span11 required" name="nomeFornecedor" placeholder="Nome" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> Nome Contato :</label>
                <div class="controls">
                  <input type="text" class="span11 required" name="nomeContatoFornecedor" placeholder="Contato interno" />
                </div>
              </div>
               <div class="control-group">
                <label class="control-label"> E-mail :</label>
                <div class="controls">
                  <input type="text" class="span11 required" name="emailFornecedor" placeholder="E-mail" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Telefone :</label>
                <div class="controls">
                  <input type="text"  class="span11 required" name="telefoneFornecedor" placeholder="Telefone para contato"  />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Endereço :</label>
                <div class="controls">
                  <input type="text" class="span11 required" name="enderecoFornecedor" placeholder="Endereço" />
                </div>
              </div>
              <div class="control-group">
              <label class="control-label">Categorias Fornecedor :</label>
              <div class="controls">
                <select multiple id="categoriasFornecedores" name="categoriasFornecedores[]" style="width: 91%;" placeholder="Qual categorias esse fornecedor se classifica">
                <?php
                  $consultaCategorias = mysqli_query($connDB," SELECT idCategoria, descricaoCategoria FROM ". tbl_categoriaFornecedores ."") or die(mysqli_error($connDB));
                  while($dadosCategoria = mysqli_fetch_assoc($consultaCategorias)) :
                    echo "<option value='".$dadosCategoria['idCategoria']."'> ". $dadosCategoria['descricaoCategoria'] ." </option>";
                  endwhile;
                ?>
                </select>
              </div>
            </div>
              <div class="form-actions" align="center">
                <div file="actions/action_fornecedoresIncluir.php" class="btn btn-success ajaxForm" idForm="#formFornecedores" >Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>