var dat; //variable global que guarda el dato "tr" (Fila a eliminar)

$(".eliminar-parentesco").click(function() { // ajax para eliminar un Parentesco
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
var iden=$(this).attr("data-id"); // captura el valor "id" del Parentesco
$('#eliminar_Parentesco').modal('show'); // abre ventana modal
<<<<<<< Updated upstream
$('#valor_id_parentesco').val(iden);   //manda valor "id" a ventana modal

}); 

function eliminar_parentesco(button)
{
    dat = $(button).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
    var ide=$(button).attr("data-id"); // captura el valor_id_parentesco "id" del parentesco
    $('#eliminar_Parentesco').modal('show'); // abre ventana modal
    $('#valor_id_parentesco').val(ide);   //manda valor_id_parentesco "id" a ventana modal

}
    $("#confirmar_eliminar_parentesco").click(function() {
        
         $.ajax({
                    type: 'POST',
                    url: 'parentesco/eliminar', // ruta eliminar parentesco
                    data: $('#delete_parentesco').serialize(), // manda el form donde se encuentra la modal parentesco
                    success: function(data){ 
                    dat.remove(); //remueve la fila eliminado 
=======
$('#valor').val(iden);   //manda valor "id" a ventana modal

}); 


    $("#confirmar_Parentesco").click(function() {
        
        $.ajax({
                    type: 'POST',
                    url: '/Parentesco/eliminar', // ruta eliminar oficio
                    data: {
                        _token: $('input[name=_token]').val(),
                            id:$('input[name=valor]').val()
                    },
                    success: function(data){
                    dat.remove(); //remueve la fila eliminado 
                    
>>>>>>> Stashed changes
                    $("#exito").modal("show"); //abre modal de exito
                    $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                                $("#exito").modal("hide"); // cierra modal
                                } );
                    }
<<<<<<< Updated upstream
             });// 
=======
             });//
>>>>>>> Stashed changes

    });