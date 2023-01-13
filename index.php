<?php


if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$telefone1 = $_POST['telefone1'];
$telefone2 = $_POST['telefone2'];
$email = $_POST['email'];
$email_recuperacao = $_POST['email_recuperacao'];
$data_nasc = $_POST['data_nasc'];
$cidade_nasc = $_POST['cidade_nasc'];
$bairro_nasc =$_POST['bairro_nasc'];
$cpf = $_POST['cpf'];
$RG = $_POST['rg'];

$result = mysqli_query($conexao, "INSERT INTO users(nome,telefone1,telefone2,email,email_recuperacao,data_nasc,cidade_nasc,bairro_nasc,,cpf,RG) values('$nome','$email','$data_nasc','$genero', '$cpf')");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    <style>
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: blue;
        }

        .field{
            border: 1px solid #ddd;
            padding: 30px;
            align-items: center;
            margin: 20px;
            display: inline;
            border-radius: 36px 35px 35px 10px;
            -webkit-border-radius: 36px 35px 35px 10px;
            -moz-border-radius: 36px 35px 35px 10px;
        }
        .legend {
            color: #ddd;
            text-align: center;
            display: flex;
        }
        .cadastrar {
            text-align: center;
            justify-content: center;
            align-items: center;
            margin: 0;
            display: flex;
        }

        .inputUser {
            border-radius: 20px;
            ;
        }

        .inputtext{
            color: #ddd;
        }

        .submit-button {
            justify-content: center;
            border-radius: 15px;
            display: flex;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="box">
        <fieldset class="field">
            <legend class="legend">FORMULARIO</legend>
                <label class="cadastrar">Cadastre-se</label>
                    <br>
                        <label for="nome" class="inputtext">Nome Completo</label>
                            <br>
                            <input type="text"  name="nome" id="nome" class="inputUser" required/>  
                            <br>
                            <label for="tefefone1" class="inputtext">telefone1</label>
                            <br>
                            <input type="telefone1" id="tefone1" class="inputUser" required/>
                            <br>
                            <label for="tefefone2" class="inputtext">telefone2</label>
                            <br>
                            <br>
                            <input type="telefone2" id="telefone2" class="inputUser" requirede/>
                           <label for="email" class="inputtext">email</label>
                            <br>
                            <input type="text"  name="email" id="email" class="inputUser" required/>  
                            <br>
                            <label for="email_recuperacao" class="inputtext">email_recuperacao</label>
                            <br>
                            <inpult type="email_recuperacao" id="emal_rec" class="inputUser" required/>
                            <br>
                           <label for="data_nasc" class="inputtext">Data de Nascimento</label>
                           <br>
                           <br>
                          <input type="data_nasc" id="data_nasc" class="inputUser" required/>
                        <br>
                        <label for="cidade_nasc" class="inputtext">cidade_nasc</label>
                          <br>
                          <br>  
                        <input type="cidade_nasc"  id="cidade_nasc" class="inputUser" required/>
                            <br>
                            <label for="bairro_nasc" class="inputtext">bairro_nasc</label>
                            <br>
                            <br>
                            <input type="bairro_nasc" id="bairro_nasc" class="inputUser" required/>
                            <br>
                            <label for="bairro_nasc" class="inputtext">bairro Nascimento</label>
                            <br>
                            <br>
                            <label for="cpf" class="inputtext">cpf</label>
                            <br>
                            <br>
                            <inpult type="cpf" id="cpf" class="inputUser" required/>
                            <br>
                            <label for="RG" class="inputtext">RG</label>
                            <br>
                            <br>
                             <inpult type="RG" id="RG" class="inputUse" required/>
                             <br>
                             <label for="data_emissao_RG" class="inputtext">data_emissao_RG</label>
                             <br>
                             <br>
                             <inpult type="data_emissao_RG" id="data_emissao_RG" class="inputUse" required/>
                             <br>

                        <p class="inputtext">GENERO</p>
                            <input type="radio" id="masculino"  name="genero"  value="masculino" required/>
                            <label for="masculino">masculino</label>
                            <br>
                            <input type="radio" id="feminino"  name="genero"  value="feminino" required/>
                            <label for="feminino">feminino</label>
                            <br>
                            <input type="radio" id="naores"  name="genero"  value="naores" required/>
                            <label for="feminino">prefiro nao responder</label>
                            <br>
                            <br>
                        <label for="cpf" class="inputtext">CPF</label>
                        <br>
                            <input type="text"  name="cpf" id="cpf" class="inputUser" required/>
                            <br>
                            <br>
                            <input type="submit" name="submit" id="submit" class="submit-button"/>
            
        </fieldset>
        </div>
    </form>

</body>
</html>
