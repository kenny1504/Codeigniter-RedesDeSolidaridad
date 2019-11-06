var dat; //variable global que guarda el dato "tr" (Fila a eliminar)

$(".eliminar-materia").click(function() { // ajax para eliminar una materia
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
var iden=$(this).attr("data-id"); // captura el valor "id" de la materia
$('#eliminar_Materia').modal('show'); // abre ventana modal
$('#valor').val(iden);   //manda valor "id" a ventana modal
}); 

function eliminar(button)
{
    dat = $(button).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
    var ide=$(button).attr("data-id"); // captura el valor "id" de la materia
    $('#eliminar_Materia').modal('show'); // abre ventana modal
    $('#valor').val(ide);   //manda valor "id" a ventana modal

}

    $("#confirmar").click(function() {
        
        $.ajax({
                    type: 'POST',
                    url: '/elimina/eliminar', // ruta eliminar materia
                    data: {
                        _token: $('input[name=_token]').val(),
                            id:$('input[name=valor]').val()
                    },
                    success: function(data){
                    dat.remove(); //remueve la fila eliminado 
                    
                    $("#exito").modal("show"); //abre modal de exito
                    $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                                $("#exito").modal("hide"); // cierra modal
                                } );
                    }
             });//

    });