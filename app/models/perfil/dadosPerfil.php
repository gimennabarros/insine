<?php

session_start();

require_once("../../models/database/Conexao.php");

$sql = "SELECT * FROM `usuarios` WHERE email = ?";
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(1, $_SESSION['email']);

$stmt->execute();

if ($stmt->rowCount() > 0) {
	
	$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

	foreach ($resultado as $r) {
		
		$nomeCompleto = $r['nomeCompleto'];
		$apelido = $r['apelido'];
		$email = $r['email'];
		$sexo = $r['sexo'];
		$atuacao = $r['atuacao'];
		$dataNascimento = $r['dataNascimento'];
		$dataCadastro = $r['dataCadastro'];
		$foto = $r['foto'];
		$descricaoPerfil = $r['descricaoPerfil'];
		$insineMoeda = $r['insineMoeda'];
		$questionariosFeitos = $r['questionariosF'];
		$acertos = $r['acertos'];
		$erros = $r['erros'];
		$mediaAcerto = $r['mediaAcerto'];
		$questionariosPostados = $r['questionariosP'];
		$posts = ['posts'];
		$artigosPostados = $r['artigosP'];
		$questoesRespondidas = $r['questoesRespondidas'];

	}

} else {

	echo "Erro na consulta de SQL";

}