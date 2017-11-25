<?php

require("../../../requires/config.php");

$idCliente = $_POST['id'];
$status = $_POST['status'];

$updateCancelaCliente = mysqli_query($connDB, " UPDATE ". tbl_clientes ." SET status = '$status' WHERE idCliente = '$idCliente'") or die(mysqli_error($connDB));
$linhasAfetadas = mysqli_affected_rows($connDB);

if($linhasAfetadas > 0) : echo 1; else : echo 0; endif;
	

	
