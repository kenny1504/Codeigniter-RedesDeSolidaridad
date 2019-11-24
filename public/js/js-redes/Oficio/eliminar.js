var dat; //variable global que guarda el dato "tr" (Fila a eliminar)

<<<<<<< Updated upstream
$(".eliminar-oficio").click(function() { // ajax para eliminar un oficio
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
var iden=$(this).attr("data-id"); // captura el valor_id_oficio "id" del oficio
$('#eliminar_Oficio').modal('show'); // abre ventana modal
$('#valor_id_oficio').val(iden);   //manda valor_id_oficio "id" a ventana modal
}); 

function eliminar_oficio(button)
{
    dat = $(button).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
    var ide=$(button).attr("data-id"); // captura el valor_id_oficio "id" de la oficio
    $('#eliminar_Oficio').modal('show'); // abre ventana modal
    $('#valor_id_oficio').val(ide);   //manda valor_id_oficio "id" a ventana modal

}

    $("#confirmar_eliminar_oficio").click(function() {
        
         $.ajax({
                    type: 'POST',
                    url: 'eliminar/oficio', // ruta eliminar oficio
                    data: $('#delete_oficio').serialize(), // manda el form donde se encuentra la modal oficio
                    success: function(data){ 
                    dat.remove(); //remueve la fila eliminado 
=======
$(".eliminar-oficio").click(function() { // ajax para eliminar una materia
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
var iden=$(this).attr("data-id"); // captura el valor "id" del oficio
$('#eliminar_Oficio').modal('show'); // abre ventana modal
$('#valor').val(iden);   //manda valor "id" a ventana modal

}); 


    $("#confirmar_Oficio").click(function() {
        
        $.ajax({
                    type: 'POST',
                    url: '/Oficio/eliminar', // ruta eliminar oficio
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