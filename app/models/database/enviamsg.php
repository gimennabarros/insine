<?php

session_start();

require_once("../perfil/dadosPerfil.php");
require_once("Conexao.php");

$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO chat (`usuarioFalou`, `mensagem`) VALUES (?,?)";
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(1, $_SESSION['email']);
$stmt->bindValue(2, $mensagem);

$stmt->execute();