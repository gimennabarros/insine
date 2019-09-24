<?php

session_start();

require_once("database/Conexao.php");

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "SELECT email, senha FROM `usuarios` WHERE email = ? AND senha = ?";
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(1, $email);
$stmt->bindValue(2, $senha);

$stmt->execute();

if ($stmt->rowCount() > 0) {

	$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

	foreach ($resultado as $r) {
		
		$_SESSION['email'] = $r['email'];

		header('Location: ../controllers/insine.php');

	}

} else {

	header('Location: ../controllers/login.php?dados_invalidos=1');

}