var dat; //variable global que guarda el dato "tr" (Fila a eliminar)

$(".eliminar-materia").click(function() { // ajax para eliminar una materia
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
var iden=$(this).attr("data-id"); // captura el id_materia "id" de la materia
$('#eliminar_Materia').modal('show'); // abre ventana modal
$('#id_materia').val(iden);   //manda id_materia "id" a ventana modal
}); 

function eliminar(button)
{
    dat = $(button).closest("tr"); //captura toda la fila donde se efectuo el click (Eliminar)
    var ide=$(button).attr("data-id"); // captura el id_materia "id" de la materia
    $('#eliminar_Materia').modal('show'); // abre ventana modal
    $('#id_materia').val(ide);   //manda id_materia "id" a ventana modal

}
<<<<<<< HEAD

=======
url="/elimina/asignatura"; //kenny
>>>>>>> de5f9b1fe286582d9a3010265cfd8723720f7b48
    $("#confirmar").click(function() {
        
         $.ajax({
                    type: 'POST',
<<<<<<< HEAD
                    url: 'asignatura/eliminar', // ruta eliminar materia
                    data: $('#delete_materia').serialize(), // manda el form donde se encuentra la modal materia
=======
                    url: 'elimina/asignatura', // ruta eliminar materia
                    data: $('#delete_Asignatura').serialize(), // manda el form donde se encuentra la modal materia
>>>>>>> de5f9b1fe286582d9a3010265cfd8723720f7b48
                    success: function(data){ 

                    if(data==1)
                    {
                        dat.remove(); //remueve la fila eliminado 
                        $("#exito").modal("show"); //abre modal de exito
                        $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                                    $("#exito").modal("hide"); // cierra modal
                                    } );
                    } 
                    else
                    {
                        alert("imposible")
                    }
                   
                    }
             });// 

    });