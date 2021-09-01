<?php
    include_once("exercicio.class.php");
	$Exemplo = new Exemplo();
	$letra;
	$prletra;
	$consoantes;
	$vogais;
	$palavra = "Palavra";
	$Exemplo->palavra($palavra);
	$prletra = $Exemplo->palavra($palavra);
	$letra = $Exemplo->quantidadePalavra($palavra);
	$consoantes = $Exemplo->vogaisPalavra($palavra);
	$vogais = $Exemplo->consoantesPalavras($palavra);
?>