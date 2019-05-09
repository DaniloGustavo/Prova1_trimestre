<?php
	include_once("cliente.php");
	$objetoNoticia = new Noticia();
	if(filter_input(INPUT_POST, "nome") &&
	   filter_input(INPUT_POST, "telefone") &&
		filter_input(INPUT_POST, "celular") &&
		filter_input(INPUT_POST, "email") &&
		filter_input(INPUT_POST, "endereço")&&
		filter_input(INPUT_POST, "numero") &&
		filter_input(INPUT_POST, "bairro") &&
		filter_input(INPUT_POST, "cidade") &&
		filter_input(INPUT_POST, "cep") &&
		filter_input(INPUT_POST, "dataCadastro") 
)
	 {
		$nome = filter_input(INPUT_POST, "nome");
		$telefone = filter_input(INPUT_POST, "telefone");
		$celular = filter_input(INPUT_POST, "celular");
		$email = filter_input(INPUT_POST, "email");
		$endereco = filter_input(INPUT_POST, "endereço");
		$numero = filter_input(INPUT_POST, "numero");
		$bairro = filter_input(INPUT_POST, "bairro");
		$cidade = filter_input(INPUT_POST, "cidade");
		$cep = filter_input(INPUT_POST, "cep");
		$dataCadastro = filter_input(INPUT_POST, "dataCadastro");
		$dados=array($nome, $telefone, $celular, $email, $endereco, $numero, $bairro, $cidade, $cep, $dataCadastro);
		$objetoNoticia->cadastrar($dados);
	}else {
		echo "Os campos não foram preenchidos!!!";	
	}
?>