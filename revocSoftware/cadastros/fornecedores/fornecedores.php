<?php
  require("../../requires/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=$linkHome?>" title="Ir para a página inicial" class="tip-bottom"><i class="icon-home"></i> Inicío</a> <a href="#" class="current">Fornecedores</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <a href="fornecedoresIncluir.php">
          <div class="btn">  Incluir Fornecedor </div>
        </a>
        <div class="widget-box">          
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table ">
              <thead>
                <tr>
                  <th style="text-align: center;" width="5%">Código</th>
                  <th width="20%">Nome</th>
                  <th width="25%">E-mail</th>
                  <th width="15%">Telefone</th>
                  <th width="15%">Endereço</th>
                  <th width="4%"> </th>
                  <th width="4%"> </th>
                  <th width="3%"> </th>
                </tr>
              </thead>
              <tbody>
              <?php
                $consultaFornecedor = mysqli_query($connDB, " SELECT * FROM ". tbl_fornecedores ."") or die(mysqli_error($mysqliConn));
                while($dadosFornecedor = mysqli_fetch_assoc($consultaFornecedor)) :
                  
                  if($dadosFornecedor['status'] == 2) :

                    $bg = "background-color: #ffb1b1;";
                    $acao = "acao='reativar'";
                    $class = "reativar";
                    $icone = "reativar.png";
                    $title = "title='Reativar Fornecedor'";

                  else :
                    $bg = "";
                    $acao = "acao='desativar'";
                    $class = "desativar";
                    $icone = "desativar.png";
                    $title = "title='Desativar Fornecedor'";
                  
                  endif;

                  echo '
                  <tr style="'.$bg.'">
                    <td style="text-align: center; '.$bg.'">'. $dadosFornecedor['idFornecedor'] .'</td>
                    <td>'. $dadosFornecedor['descricaoFornecedor'] .'</td>
                    <td>'. $dadosFornecedor['email'] .'</td>
                    <td>'. $dadosFornecedor['telefone'] .'</td>
                    <td>'. $dadosFornecedor['endereco'] .'</td>
                    <td style="text-align: center;"> 
                      <a href="'.$link.'cadastros/fornecedores/fornecedoresVisualizar?id='.$dadosFornecedor['idFornecedor'].'">
                        '.imagemIcone("search.png").'
                      </a>
                    </td>
                    
                    <td style="text-align: center;"> 
                      <a href="'.$link.'cadastros/fornecedores/fornecedoresEditar?id='.$dadosFornecedor['idFornecedor'].'">
                        '.imagemIcone("editar.png", 20).'
                      </a>
                    </td>
                    
                    <td id="'.$dadosFornecedor['idFornecedor'].'" '.$title.' style="text-align: center; cursor:pointer;" dir="cadastros/Fornecedors/actions/action_FornecedoresDesativar.php" class="'.$class.'" '.$acao.' > '. imagemIcone($icone) .'</td>

                  </tr> ';

                endwhile;
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
