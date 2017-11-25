c<?php
  require("../../requires/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=$linkHome?>" title="Ir para a página inicial" class="tip-bottom"><i class="icon-home"></i> Inicío</a> <a href="#" class="current">categoriaFornecedores</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <a href="categoriaFornecedoresIncluir.php">
          <div class="btn">  Incluir Categoria </div>
        </a>
        <div class="widget-box">          
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table ">
              <thead>
                <tr>
                  <th width="10%">Código</th>
                  <th width="80%">Descrição</th>
                  <th width="10%"> Status </th>
                </tr>
              </thead>
              <tbody>
              <?php
                $consultaCliente = mysqli_query($connDB, " SELECT * FROM ". tbl_categoriaFornecedores ."") or die(mysqli_error($mysqliConn));
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
                    <td style="text-align: center; '.$bg.'">'. $dadosCliente['idCategoria'] .'</td>
                    <td>'. $dadosCliente['descricaoCategoria'] .'</td>
                    <td id="'.$dadosCliente['idCategoria'].'" '.$title.' style="text-align: center; cursor:pointer;" dir="cadastros/categoriaFornecedores/actions/action_categoriaFornecedoresDesativar.php" class="'.$class.'" '.$acao.' > '. imagemIcone($icone) .'</td>
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
