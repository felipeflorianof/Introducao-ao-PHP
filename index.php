<?php
    include "Servicos/ServicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML&PHP</title>
</head>
<body>
        <p>Formulário para inscrição de Competidores</p>
 
    <form action="script.php" method="post">
        <?php

        $mensagemDeSucesso = obterMensagemSucesso();
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = obterMensagemErro();
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }

        ?>
        <p>Seu nome: <input type="text" name="nome"></p>
        <p>Sua Idade: <input type="text" name="idade"></p>
        <p><input type="submit" value="Enviar Dados do Competidor"></p>

    </form>
</body>
</html>
