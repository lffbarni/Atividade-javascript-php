<?php
    function validaForm(){
        if($_POST['nome'] == "" || $_POST['salario'] == "" || $_POST['endereco'] == ""){
            echo "<script>alert(\"dados nao informados\")</script>";
        }
    }
?>