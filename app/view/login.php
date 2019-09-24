<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="../../resources/bootstrap-4.3.1-dist/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="../../css/style.css">

        <script src="../../js/JavaScript.js"></script>

        <title>Insine - Login</title>
    </head>
<body>

<div class="container">
    <div class="baseCadastro">
        <form name="formularioCadastro" method="post" action="../models/login.php">


            <center> <h2>Loge-se</h2> </center> <hr style="background: white;">

            <div id="erroFormulario"></div>

            <?php require_once("../models/erro_login.php") ?>

            <div>
                <small>E-mail</small> <br>
                <input required type="email" name="email" class="inputLargo" placeholder="Digite seu e-mail">
            </div>

            <div>
                <small>Senha</small> <br>
                <input required type="password" name="senha" class="inputLargo" placeholder="Digite sua senha">
            </div>

            <hr style="background: white;">

            <input class="btnCadastrar" type="submit" value="Logar" onclick="return validarLogin()">

        </form>

    </div>
</div>
