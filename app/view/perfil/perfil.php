<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../../../resources/bootstrap-4.3.1-dist/css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="../../../css/style.css">

		<script src="../../../js/comentarios.js"></script>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<title>Insine - Perfil</title>
	</head>
<body>

<?php require_once("../../models/perfil/rolarPostagem.php") ?>

<script src="../../../js/ocultarComentarios.js"></script>

<script src="../../../js/postagens.js"></script>

<div class="container">
	
	<div class="caixaPerfil">
		
		<center> 

			<img src="../../../images/user.jpg" class="rounded-circle imgPerfil">

			<h3> <?php echo $apelido ?> </h3> <hr style="background-color: silver;">

		</center>

		<div>
			
			<p> <span>Nome Completo:</span> <?php echo $nomeCompleto ?> </p>
			<p> <span>E-mail:</span> <?php echo $email ?> </p>
			<p> <span>InsineCoin:</span> <?php echo $insineMoeda ?> </p>
			<p> <span>Descrição:</span> <?php echo $descricaoPerfil ?> </p>
			<p> <span>Sexo:</span> <?php echo $sexo ?> </p>
			<p> <span>Atuação:</span> <?php echo $atuacao ?> </p>
			<p> <span>Data de Nascimento:</span> <?php echo date("d/m/Y", strtotime($dataNascimento)) ?> </p>
			<p> <span>Cadastrado em:</span> <?php echo date("d/m/Y H:i", strtotime($dataCadastro)) ?> </p> 

		</div>

	</div>

	<div class="caixaPerfil2">
		
		<p>Questionários Postados: <?php echo $questionariosPostados; ?> </p>
		<p>Questionários Feitos: <?php echo $questionariosFeitos; ?> </p>
		<p>Questões Respondidas: <?php echo $questoesRespondidas; ?> </p>
		<p>Questões Acertadas: <?php echo $acertos; ?> </p>
		<p>Questões Erradas: <?php echo $erros; ?> </p>
		<p>Média de Acertos: <?php echo $mediaAcerto = ($acertos * 100) / $questoesRespondidas; ?>% </p>

	</div>

	<div class="caixaPerfil2 caixaPerfil3" style="margin-top: -10px; padding-bottom: 60px;">	

		<form id="foo" action="../../models/perfil/fazerPublicacao.php" method="post" style="margin-bottom: 40px;">

			<div class="card">

				<div class="card-header">
					Faça uma postagem.
				</div>

				<div class="card-body">
					<textarea rows="5" id="textoPostagem" name="postagem" maxlength="2000" placeholder=" Digite algo..."></textarea>
				</div>

				<div class="card-footer">
					<button class="btnPostar" type="submit">Publicar</button>
				</div>

			</div>

		</form>

		<?php require_once("../../models/perfil/visuPublicacao.php") ?>

	</div>


</div>