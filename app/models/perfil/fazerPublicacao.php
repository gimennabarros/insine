<?php

session_start();

require_once("dadosPerfil.php");
require_once("../database/Conexao.php");

$postagem = $_POST['postagem'];

$sql = "INSERT INTO postagens (`usuarioPostou`, `postagem`) VALUES (?,?)";
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(1, $apelido);
$stmt->bindValue(2, $postagem);

$stmt->execute();

header('Location: ../../controllers/perfil/perfil.php?post');