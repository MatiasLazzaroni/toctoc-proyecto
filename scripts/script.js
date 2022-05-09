$(".icono").on("click", function(){
    $(".lista").toggle("slow");
});

/*seccion Armando de proyecto*/
$("#seccionFormulario").hide();
$(".seccionFormulario").hide();
$("#seccionFinal").hide();
$(".final").hide();

$(".btnEstilos").on("click",function(){
    $("#seccionFormulario").show(1000);
    $(".seccionFormulario").show(1000);
    $(".seleccionEstilos").hide();
    $(".tituloEstilos").hide();
});

$(".btnForm").on("click", function(){
    $("#seccionFormulario").hide();
    $(".seccionFormulario").hide();
    $("#seccionFinal").show(1000);
    $(".final").show(1000);
})

//comentario de prueba //