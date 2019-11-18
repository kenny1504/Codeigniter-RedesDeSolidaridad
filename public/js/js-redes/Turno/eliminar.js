var dat; //variable global que guarda el dato "tr" (Fila a eliminar)

$(".eliminar-turno").click(function() { // ajax para eliminar una materia
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
var iden=$(this).attr("data-id"); // captura el id_materia "id" de la materia
$('#eliminar_Turno').modal('show'); // abre ventana modal
$('#valor_id_turno').val(iden);   //manda id_materia "id" a ventana modal
}); 

function eliminacion_turno(button)
{
    dat = $(button).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
    var ide=$(button).attr("data-id"); // captura el id_materia "id" de la materia
    $('#eliminar_Turno').modal('show'); // abre ventana modal
    $('#valor_id_turno').val(ide);   //manda id_materia "id" a ventana modal

}
//url="/elimina/asignatura"; //kenny
url11="turno/eliminar";//sandino
    $("#confirmar_eliminar_turno").click(function() {
        
         $.ajax({
                    type: 'POST',
                    url: url11, // ruta eliminar materia
                    data: $('#delete_turno').serialize(), // manda el form donde se encuentra la modal materia
                    success: function(data){ 
                    dat.remove(); //remueve la fila eliminado 
                    $("#exito").modal("show"); //abre modal de exito
                    $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                                $("#exito").modal("hide"); // cierra modal
                                } );
                    }
             });// 

    });