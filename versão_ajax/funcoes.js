$(document).ready(function(){
    $("#enviar").click(function(){
        $.post("funcoesphp.php",{
            nome : $("#nome").val(),
            salario : $("#salario").val(),
            endereco : $("#endereco").val()
        }, function(data){
            console.log("ok")
            $("#resultado").html(data)
        })
    })
        
})