<?php
  require("../../requires/header.php");

  $idFornecedor = addslashes($_GET['id']);

  $consultaDadosFornecedor = mysqli_query($connDB, " SELECT * FROM ". tbl_fornecedores ." WHERE idFornecedor = '$idFornecedor'");

  if(mysqli_num_rows($consultaDadosFornecedor) == 0) :
  		exit;
  else :
  	$dadosFornecedor = mysqli_fetch_assoc($consultaDadosFornecedor);
  	$nomeFornecedor = $dadosFornecedor['descricaoFornecedor'];
  	$nomeContatoFornecedor = $dadosFornecedor['nomeContato'];
  	$emailFornecedor = $dadosFornecedor['email'];
  endif;

?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=$linkHome?>" title="Ir para a página inicial" class="tip-bottom"><i class="icon-home"></i> Inicío</a> <a href="<?=$linkFornecedores?>" class="tip-bottom">Fornecedores</a> <a href="#" class="current">Visualizar Fornecedor</a> </div>
  </div>
  <div class="container-fluid" style="width: 2200px;">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box" width="80%">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Informações fornecedor</h5>
          </div>
          </div>
      </div>
    </div>
  </div>