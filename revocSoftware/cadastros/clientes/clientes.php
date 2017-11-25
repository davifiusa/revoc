<?php
  require("../../requires/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=$linkHome?>" title="Ir para a página inicial" class="tip-bottom"><i class="icon-home"></i> Inicío</a> <a href="#" class="current">Clientes</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <a href="clientesIncluir.php">
          <div class="btn">  Incluir Cliente </div>
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
                  <th width="9%">Instagram</th>
                  <th width="5%"> </th>
                  <th width="5%"> </th>
                </tr>
              </thead>
              <tbody>
              <?php
                $consultaCliente = mysqli_query($connDB, " SELECT * FROM clientes ") or die(mysqli_error($mysqliConn));
                while($dadosCliente = mysqli_fetch_assoc($consultaCliente)) :
                  if($dadosCliente['status'] == 2) :

                    $bg = "background-color: #ffb1b1;";
                    $acao = "acao='reativar'";
                    $class = "reativar";
                    $icone = "reativar.png";
                    $title = "title='Reativar cliente'";

                  else :
                    $bg = "";
                    $acao = "acao='desativar'";
                    $class = "desativar";
                    $icone = "desativar.png";
                    $title = "title='Desativar cliente'";
                  
                  endif;

                  echo '
                  <tr style="'.$bg.'">
                    <td style="text-align: center; '.$bg.'">'. $dadosCliente['idCliente'] .'</td>
                    <td>'. $dadosCliente['nomeCliente'] .'</td>
                    <td>'. $dadosCliente['emailCliente'] .'</td>
                    <td>'. $dadosCliente['telefoneCliente'] .'</td>
                    <td>'. $dadosCliente['enderecoCliente'] .'</td>
                    <td>'. $dadosCliente['instagramCliente'] .'</td>
                    <td style="text-align: center;"> '. imagemIcone('search.png') .'</td>
                    <td id="'.$dadosCliente['idCliente'].'" '.$title.' style="text-align: center; cursor:pointer;" dir="cadastros/clientes/actions/action_clientesDesativar.php" class="'.$class.'" '.$acao.' > '. imagemIcone($icone) .'</td>
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
