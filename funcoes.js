function verificaSalario(){
    if($("#salario").val() == ""){
        alert("Informe o salario")
        return false;
    }
    else{
        return true;
    }
}

$(document).ready(function(){
    $("#formulario").submit(verificaSalario)
})