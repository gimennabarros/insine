function validarCadastro(){

    var nome = formularioCadastro.nome.value;

    var apelido = formularioCadastro.apelido.value;

    var email = formularioCadastro.email.value;
    var repetirEmail = formularioCadastro.rEmail.value;

    var senha = formularioCadastro.senha.value;
    var repetirSenha = formularioCadastro.rSenha.value;

    var sexoM = document.getElementById('Masculino').checked;
    var sexoF = document.getElementById('Feminino').checked;

    var aluno = document.getElementById('Aluno').checked;
    var professor = document.getElementById('Professor').checked;

    if (nome == "") {
        document.getElementById('erroFormulario').innerHTML = 
        "<div style='background: red; padding: 20px;'>"+
                "Por favor, preencha o nome!" +
        "</div>";
        return false;
    }

    if (apelido == "") {
        document.getElementById('erroFormulario').innerHTML = 
        "<div style='background: red; padding: 20px;'>"+
                "Por favor, preencha o apelido!" +
        "</div>";
        return false;
    }

    if (email == "") {
        document.getElementById('erroFormulario').innerHTML = 
        "<div style='background: red; padding: 20px;'>"+
                "Por favor, preencha o e-mail!" +
        "</div>";
        return false;
    }

    if (email != repetirEmail) {

        document.getElementById('erroFormulario').innerHTML = 
        "<div style='background: red; padding: 20px;'>"+
                "Os e-mails devem ser iguais!" +
        "</div>";
        return false;

    }

    if (senha == "") {
        document.getElementById('erroFormulario').innerHTML = 
        "<div style='background: red; padding: 20px;'>"+
                "Por favor, preencha a senha!" +
        "</div>";
        return false;
    }

    if (senha.length < 8 || senha.length > 30) {

        document.getElementById('erroFormulario').innerHTML = 
            "<div style='background: red; padding: 20px;'>"+
                "A senha deve conter entre 8 e 30 caracteres!" +
            "</div>";
            return false;

    }

    if (senha != repetirSenha) {

        document.getElementById('erroFormulario').innerHTML = 
        "<div style='background: red; padding: 20px;'>"+
                "As senhas devem ser iguais!" +
        "</div>";
        return false;

    }

    if (sexoM == "" && sexoF == "") {
        document.getElementById('erroFormulario').innerHTML = 
        "<div style='background: red; padding: 20px;'>"+
                "Selecione o seu sexo!" +
        "</div>";
        return false;
    }

    if (aluno == "" && professor == "") {
        document.getElementById('erroFormulario').innerHTML = 
        "<div style='background: red; padding: 20px;'>"+
                "Selecione a sua atuação!" +
        "</div>";
        return false;
    }

}