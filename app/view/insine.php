<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../../resources/bootstrap-4.3.1-dist/css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="../../../css/style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<title>Insine</title>
	</head>
<body>

<p id="resultado"></p>
<form id="cadastrarPost" action="" method="POST">
	nome: <br>
	<input type="text" name="nome">
	<button type="submit">enviar</button>
</form>

<script type="text/javascript">
	
	$(function(){

		$('#cadastrarPost').submit(function(event){
			event.preventDefault();
			var formDados = new FormData($(this)[0]);

			$.ajax({
				url: '../models/postarPost.php',
				type: 'POST',
				data: formDados,
				cache: false,
				contentType: false,
				processData: false,
				success:function(data){
					$('#resultado').html(data);
					alert('cadastrado');
				},
				dataType:'html'
			});

			return false;

		});

	});

</script>

<?php

session_start();

require_once("../models/database/Conexao.php");


$sql = "SELECT * FROM postagens";
$stmt = Conexao::getConn()->prepare($sql);

$stmt->execute();

if ($stmt->rowCount() > 0) {

	$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

	foreach ($resultado as $r) {
		
		echo $r['postagem']."<br>";

	}

}