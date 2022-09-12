<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include "funcoesphp.php"
    ?>
</head>
<body>
    <form method="post" id="formulario">
        <div>
            nome
            <input type="text" name="nome">
            <br>
            salario
            <input type="text" id="salario" name="endereco">
            <br>
            endereço
            <textarea name="endereco" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="enviar" name="enviar" id="enviar">
        </div>
        <div id="resultado">

        </div>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="funcoes.js"></script>
</html>