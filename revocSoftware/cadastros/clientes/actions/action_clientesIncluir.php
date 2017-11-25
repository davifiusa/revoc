<?php
	
	require("../../../requires/config.php");

	$nomeCliente = addslashes($_POST['nomeCliente']);
	$emailCliente = addslashes($_POST['emailCliente']);
	$telefoneCliente = addslashes(retiraCaracteresEspeciais($_POST['telefoneCliente']));
	$enderecoCliente = addslashes($_POST['enderecoCliente']);
	$instagramCliente = addslashes($_POST['instagramCliente']);

	//Inserindo um novo Cliente
	$insereDadosCliente = mysqli_query($connDB, " INSERT INTO  ". tbl_clientes ." 
												  SET 	nomeCliente = '$nomeCliente',
												  		emailCliente = '$emailCliente',
												  		telefoneCliente = '$telefoneCliente',
												  		enderecoCliente = '$enderecoCliente',
												  		instagramCliente = '$instagramCliente' ") or die(mysqli_error($connDB));

	$idClienteInserido = mysqli_insert_id($connDB);

	if($idClienteInserido > 0) :
		echo 1;
	else :
		echo 0;
	endif;
?>