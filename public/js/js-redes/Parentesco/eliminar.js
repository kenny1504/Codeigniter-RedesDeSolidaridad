var dat; //variable global que guarda el dato "tr" (Fila a eliminar)

$(".eliminar-parentesco").click(function() { // ajax para eliminar un Parentesco
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
var iden=$(this).attr("data-id"); // captura el valor "id" del Parentesco
$('#eliminar_Parentesco').modal('show'); // abre ventana modal
$('#valor_id_parentesco').val(iden);   //manda valor "id" a ventana modal

}); 

function eliminacion_parentesco(button)
{
    dat = $(button).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
    var ide=$(button).attr("data-id"); // captura el id_materia "id" de la materia
    $('#eliminar_Parentesco').modal('show'); // abre ventana modal
    $('#valor_id_parentesco').val(ide);   //manda id_materia "id" a ventana modal

}
    $("#confirmar_eliminar_parentesco").click(function() {
        
         $.ajax({
                    type: 'POST',
                    url: 'parentesco/eliminar', // ruta eliminar materia
                    data: $('#delete_parentesco').serialize(), // manda el form donde se encuentra la modal materia
                    success: function(data){ 
                    dat.remove(); //remueve la fila eliminado 
                    $("#exito").modal("show"); //abre modal de exito
                    $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                                $("#exito").modal("hide"); // cierra modal
                                } );
                    }
             });// 

    });