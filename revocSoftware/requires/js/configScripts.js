$(document).ready(function(){
	
	// Funcao responsavel por fazer todas as validacoes dos preenchimentos dos formularios do sistema 
	$(".ajaxForm").click(function(){
		//Campos obrigatorios no formulario		
		let camposObrigatorios = $(".required"), camposVazios = false;
		// Verificando se existem campos vazios
		camposObrigatorios.each(function(){
			if( $(this).val() === "" ){
				// Aplicando uma borda vermelha nos campos nao preenchidos
				$(this).css({"border": "solid 1px #f58888"});
				camposVazios = true;
			}
		});
		//Caso nao tenha campos vazios
		if(camposVazios === false){
			// id do Formulario
			let idForm = $(this).attr("idForm");
			// Arquivo pra onde vai ser enviado os dados
			let arquivoAjax = $(this).attr("file");
			// Dados do formulario
			let dadosFormulario = $(idForm).serialize();

			$.post(arquivoAjax, dadosFormulario, function(confirm){
				if(confirm == 1) {
					$(".required").css({"border": "1px solid #ccc" });
					$(".alert-error").hide();
					$(".alert-success").fadeIn();
					// Limpando campos preenchidos
					camposObrigatorios.each(function(){ $(this).val("") });
				}
				else {
					$(this).css({"border": "none"});
					$(".alert-success").fadeIn();
				}
			} );
		} else {
			$(".alert-success").hide();
			$(".alert-error").fadeIn();
		}

		setTimeout(function(){
			$(".alert-success, .alert-error").hide();
		}, 8000);
	} );

	// Funcao para desativar ou reativar 
	$(".desativar, .reativar").click(function(){
		// Verificando qual acao o usuario deseja fazer
		let acao = $(this).attr("acao");
		
		// Setando status de modificacao
		if(acao == "desativar") 	var status = 2;
		else if(acao == 'reativar') var status = 1;

		// Confirmando se o usario deseja realmente proceder com a acao			
		let confirma = confirm("Deseja realmente "+ acao +" ?");

		// Caso o usuario confirme
		if(confirma){
			// id que sera modificado e caminho do arquivo AJAX 
			let id = $(this).attr("id"),
				dir = "/revoc/sistemas/pdv_premium/"+ $(this).attr("dir");
			
			$.post(dir, { "id": id , "status": status}, function(resp){
				if(resp){
					window.location.reload();
				}else{
					alert("Erro")
				}
			});
		}
	});

	$(".data-table").DataTable( {
		"bFilter": false,
        "paging": false,
        "ordering": false,
        "info": false,
        "bPaginate": false,
	    "bInfo" : false
    });
});