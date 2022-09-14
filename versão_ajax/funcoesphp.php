<?php
    function validaForm(){
        $validado = true;

        if($_POST['nome'] == ""){
            $validado = false;
        }
        if($_POST['salario'] == ""){  
            $validado = false;
        }
        if($_POST['endereco'] == ""){
            $validado = false;
        }

        return $validado;
    }

    if(validaForm()){
        echo "Salário de ".$_POST['nome'].": ".(intval($_POST['salario'])/1200)." salário(s) mínimo(s).";
    }else{
        if($_POST['nome'] == ""){
            echo "<script>window.alert(\"Nome não informado\")</script>";
        }
        if($_POST['salario'] == ""){
            echo "<script>window.alert(\"Salário não informado\")</script>";
        }
        if($_POST['endereco'] == ""){
            echo "<script>window.alert(\"Endereço não informado\")</script>";
        }
    }
?>