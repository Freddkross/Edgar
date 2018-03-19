$("#form").submit(function(event){
    event.preventDefault(); //alamcena los datos sin  refresacar el sitio
    enviar();
});

function enviar(){
    var datos=$("#form").serialize();
    $.ajax({
        type: "post",
        url: "php/Busq.php",
        data: datos,
        success: function(texto){
            if(texto=="Exito"){
                correcto();
            }else{
                Errorphp(texto);
            }
        }
    })
}
function correcto(){
    $("#msjC").removeClass("d-none");
    $("#msjE").removeClass("d-none");
    $("#msjE").html(texto);
}
function Errorphp(texto){
    $("#msjE").removeClass("d-none");
    $("#msjE").html(texto);
}