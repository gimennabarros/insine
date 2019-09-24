<?php

require_once("database/Conexao.php");

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$sexo = $_POST['sexo'];
$atuacao = $_POST['atuacao'];
$dataNascimento = $_POST['data'];

$insineMoeda = 0;

$sql = "INSERT INTO usuarios (`nomeCompleto`, `apelido`, `email`, `senha`, `sexo`, `atuacao`, `dataNascimento`, `insineMoeda`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(1, $nome);
$stmt->bindValue(2, $apelido);
$stmt->bindValue(3, $email);
$stmt->bindValue(4, $senha);
$stmt->bindValue(5, $sexo);
$stmt->bindValue(6, $atuacao);
$stmt->bindValue(7, $dataNascimento);
$stmt->bindValue(8, $insineMoeda);

$stmt->execute();