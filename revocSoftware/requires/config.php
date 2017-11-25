<?php

	####################################################################################################################	
	// Caminhos dos diretorios do sistema
	################################################################################################################
	$dirRaizServer = $_SERVER['DOCUMENT_ROOT'];
	$enderecoHost ="http://".$_SERVER['SERVER_ADDR'];
	$dirRef = "$enderecoHost/revoc/revocSoftware/requires/";
	$dirIcones = "/revoc/sistemas/pdv_premium/requires/img/icons/";
	###################################################################################################################	
	
	



	####################################################################################################################
	# Links Pre estabelecidos
	####################################################################################################################
	$link = "http://localhost:83/revoc/sistemas/pdv_premium/";
	$linkHome = "http://localhost:83/revoc/sistemas/pdv_premium/home";
	$linkClientes = "http://localhost:83/revoc/sistemas/pdv_premium/cadastros/clientes/clientes";
	$linkFornecedores = "http://localhost:83/revoc/sistemas/pdv_premium/cadastros/fornecedores/fornecedores";
	$linkCategoriaFornecedores = "http://localhost:83/revoc/sistemas/pdv_premium/cadastros/categoriaFornecedores/categoriaFornecedores";
	####################################################################################################################


	
	
	
	####################################################################################################################
	# Tratando exibicao dos erros
	####################################################################################################################
	$_ERROR[403] = '
	<div id="content">
		<div id="content-header">
		<div id="content-header">
		<div id="breadcrumb"> 
			<a href="'.$linkHome.'" title="Ir para a página inicial" class="tip-bottom"><i class="icon-home"></i> Inicío</a> <a href="<?=$linkFornecedores?>" class="tip-bottom">Fornecedor</a> <a href="#" class="current">Incluir fornecedor</a> </div>
	  	</div>
		<h1>Error 403</h1>
		</div>
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
				<h5>Error 403</h5>
				</div>
				<div class="widget-content">
				<div class="error_ex">
					<h1>403</h1>
					<h3>Opps, Youre lost.</h3>
					<p>Access to this page is forbidden</p>
					<a class="btn btn-warning btn-big"  href="index.html">Back to Home</a> </div>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div> ';
	  
	$_ERROR[404] = '
	<div id="content">
		<div id="content-header">
			<div id="breadcrumb"> 
				<a href="'.$linkHome.'" title="Ir para a página inicial" class="tip-bottom"><i class="icon-home"></i> Inicío</a> <a href="<?=$linkFornecedores?>" class="tip-bottom">Fornecedor</a> <a href="#" class="current">Incluir fornecedor</a> 
			</div>

			<h1>Error 404</h1>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
					<h5>Error 404</h5>
					</div>
					<div class="widget-content">
					<div class="error_ex">
						<h1>404</h1>
						<h3>Ops, ocorreu um erro :(</h3>
						<p>Não conseguimos encontra à pagina que você procura.</p>
						<a class="btn btn-warning btn-big"  href="'.$linkHome.'">Voltar para o inicío</a> </div>
					</div>
				</div>
				</div>
			</div>
			</div>
	</div>';
	####################################################################################################################




	
	####################################################################################################################
	# Dados BD
	####################################################################################################################
	$connDB = mysqli_connect("127.0.0.1", "root", "", "revoc_pdv");
	mysqli_set_charset($connDB, "UTF8");
	####################################################################################################################





	
	####################################################################################################################
	# Defines que serao utilizadas no sistema
	#################################################################################################################### 
	define("tbl_clientes", "clientes");
	define("tbl_fornecedores", "fornecedores");
	define("tbl_categoriaFornecedores", "categoriafornecedores");
	####################################################################################################################





	####################################################################################################################
	# Funcoes Gerais do sistema
	####################################################################################################################
	
	/** 
	* Funcao responsavel por retornar a imagem completa passando como paramentro apenas o nome do arquivo
	* @access public
	* @param String $nomeArquivo
	* @param Int $width
	* @param Int $height
	* @return imagem 
	**/
	function imagemIcone($nomeArquivo, $width = 17)
	{
		$imagem = "<img src='/revoc/sistemas/pdv_premium/requires/img/icons/$nomeArquivo' width='".$width."px'>";
		return $imagem;
	}

	/** 
	* Funcao responsavel por retirar os caractares especiais de uma string
	* @access public
	* @param String $string
	* @return String 
	**/
	function retiraCaracteresEspeciais($string)
	{
	    $caracteresEspeciais = array( 	'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú',
	    					 			'ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );

        $caracteresSubstituicao = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C'							 ,'_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_' );

		return str_replace($caracteresEspeciais, $caracteresSubstituicao, $string);
	}

	/** 
	* Funcao responsavel por validar os dados que foram preenchidos nos formulario verificando possiveis SQL Injections
	* @access public
	* @param String $string
	* @return String 
	**/
	function postValidate($string)
	{
	    $instrucoesSQL = array( "INSERT", "insert", "UPDATE", "update", "DELETE",  "delete", "TRUNCATE", "truncate", "WHERE", "where" );

	    $retirandoPossiveisInjections = str_replace($instrucoesSQL, "", $string);

	    return addslashes($retirandoPossiveisInjections);
	}

	/** 
	* Funcao responsavel por validar os dados que foram preenchidos nos formulario verificando possiveis SQL Injections
	* @access public
	* @param String $string
	* @return String 
	**/
	function verificaSessaoUsuario($linkHome)
	{
		if($_SESSION['logado'] == true)
		{
			header("Location: ".$linkHome."index.php"); 
		}
		else
		{
			header("Location: ".$linkHome."login.html"); 
		}
	}

	/** 
	* Funcao responsavel por validar os dados que foram preenchidos nos formulario verificando possiveis SQL Injections
	* @access public
	* @param String $string
	* @return String 
	**/
	function criptografa($str)
	{
		$str = sha1( md5( sha1 ( md5 ( $str ) ) ) );

		return $str; 		
	}

	function consultaBD($consulta, $connDB, $error = "")
	{
		$consulta = mysqli_query($connDB, $consulta);

		if(mysqli_num_rows($consulta) == 0):
			if(!empty($error)) :
				echo $error; exit;
			else :
				return mysqli_error($connDB);
			endif;
		else :
			$dados = mysqli_fetch_assoc($consulta);
		endif;

		return $dados;
	}
	####################################################################################################################
?>