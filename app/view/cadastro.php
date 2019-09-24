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

        <title>Insine - Cadastro</title>
    </head>
<body>

<div class="container">
    <div class="baseCadastro">
        <form name="formularioCadastro" method="post" action="../models/cadastro.php">

            <center> <h2>Cadastre-se</h2> </center> <hr style="background: white;">

            <div id="erroFormulario"></div>
            
            <div>
                <small>Nome Completo</small> <br>
                <input required type="text" name="nome" class="inputLargo" placeholder="Digite seu nome completo">
            </div>

            <div>
                <small>Data de Nascimento</small> <br>
                <input required type="date" name="data" class="inputLargo">
            </div>

            <div>
                <small>Apelido</small> <br>
                <input required type="text" name="apelido" placeholder="Nome que será exibido no perfil" class="inputLargo">
            </div>

            <div>
                <small>E-mail</small> <br>
                <input required type="email" name="email" class="inputLargo" placeholder="Digite seu e-mail">
            </div>

            <div>
                <small>Repetir E-mail</small> <br>
                <input required type="email" name="rEmail" class="inputLargo" placeholder="Confirme o seu e-mail">
            </div>

            <div>
                <small>Senha</small> <br>
                <input type="password" name="senha" class="inputLargo" placeholder="Digite uma senha">
            </div>

            <div>
                <small>Repetir Senha</small> <br>
                <input type="password" name="rSenha" class="inputLargo" placeholder="Confirme sua senha">
            </div>

            <div>
                <small>Sexo</small> <br>
                <input type="radio" name="sexo" value="Masculino" id="Masculino"> Masculino
                <input type="radio" name="sexo" value="Feminino" id="Feminino"> Feminino
            </div>

            <div>
                <small>Você é</small> <br>
                <input type="radio" name="atuacao" value="Aluno" id="Aluno"> Aluno
                <input type="radio" name="atuacao" value="Professor" id="Professor"> Professor
            </div>

            <hr style="background: white;">

            <input class="btnCadastrar" type="submit" value="Cadastrar" onclick="return validarCadastro()">

        </form>

    </div>
</div>
