<?php
	
	require("../../../requires/config.php");

	$nomeFornecedor = addslashes($_POST['nomeFornecedor']);
	$nomeContatoFornecedor = addslashes($_POST['nomeContatoFornecedor']);
	$emailFornecedor = addslashes($_POST['emailFornecedor']);
	$telefoneFornecedor = addslashes(retiraCaracteresEspeciais($_POST['telefoneFornecedor']));
	$enderecoFornecedor = addslashes($_POST['enderecoFornecedor']);
	$categoriaFornecedor = $_POST['categoriasFornecedores'];

	foreach ($categoriaFornecedor as $indiceArray => $categoria) :
		$idCategoriaFornecedor .= "$categoria|";
	endforeach;		
	
	//Inserindo um novo Fornecedor
	$insereDadosFornecedor = mysqli_query($connDB, " 
												INSERT INTO ". tbl_fornecedores ." 
												 SET 		descricaoFornecedor = '$nomeFornecedor',
													  		email = '$emailFornecedor',
													  		telefone = '$telefoneFornecedor',
													  		endereco = '$enderecoFornecedor',
													  		categoriaFornecedor = '$idCategoriaFornecedor',
													  		status = 1 
								  			") or die(mysqli_error($connDB));

	$idFornecedorInserido = mysqli_insert_id($connDB);

	if($idFornecedorInserido > 0) :
		echo 1;
	else :
		echo 0;
	endif;
?>