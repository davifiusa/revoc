<?php
  require("../../requires/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=$linkHome?>" title="Ir para a página inicial" class="tip-bottom"><i class="icon-home"></i> Inicío</a> <a href="<?=$linkClientes?>" class="tip-bottom">Clientes</a> <a href="#" class="current">Incluir cliente</a> </div>
  </div>
  <div class="container-fluid" style="width: 2200px;">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box" width="80%">
          <div class="alert alert-success" style="display: none;">
            <button class="close" data-dismiss="alert">×</button>
            <strong>Cliente cadastrado com sucesso!</strong>
          </div>
          <div class="alert alert-error" style="display: none;">
            <button class="close" data-dismiss="alert">×</button>
            <strong>Preencha todos os campos</strong>
          </div>
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Cadastrar um novo Cliente</h5>
          </div>
          <div class="widget-content nopadding">
            <form  id="formClientes" method="post" class="form-horizontal" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label"> Nome :</label>
                <div class="controls">
                  <input type="text" class="span11 required" name="nomeCliente" placeholder="Nome" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> E-mail :</label>
                <div class="controls">
                  <input type="text" class="span11 required" name="emailCliente" placeholder="E-mail" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Telefone :</label>
                <div class="controls">
                  <input type="text"  class="span11 required" name="telefoneCliente" placeholder="Telefone para contato"  />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Endereço :</label>
                <div class="controls">
                  <input type="text" class="span11 required" name="enderecoCliente" placeholder="Endereço" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Instagram :</label>
                <div class="controls">
                  <input type="text" name="instagramCliente" class="span11 required" placeholder="Usuário do Instagram" />
                </div>
              </div>
              <div class="form-actions" align="center">
                <div file="actions/action_clientesIncluir.php" class="btn btn-success ajaxForm" idForm="#formClientes" >Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>