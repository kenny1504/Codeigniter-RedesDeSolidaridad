var dat; //variable global que guarda el dato "tr" (Fila a editar)

$(".editarparentesco").click(function() { // ajax para editar un parentesco
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Editar)
var ide=$(this).attr("data-id");//obtiene el id del parentesco
var name=$(this).attr("data-Nombre");//obtiene nombre del parentesco
$('#editar_Parentesco').modal('show'); // abre ventana modal
$('.error').addClass('hidden'); // oculta error del servidor(validacion-servidor)
$('#idparentesco').val(ide);   //manda valor "id" a ventana modal Nombre
$('#Nombre-Parentesco').val(name);
}); 


function Ingresar(e) { // Metodo para guardar(editar) datos los datos al presionar ENTER 
    var tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13) // si es 13 entonces presiono ENTER
    {
        $("#editar_confirmar_Parentesco").click(); // llama al evento click "editar_confirmar_Oficio"
    }
  }

    $("#editar_confirmar_Parentesco").click(function() {
        
        $.ajax({
                    type: 'POST',
                    url: '/Parentesco/editar', // ruta editar parentesco 
                    data: {
                                _token: $('input[name=_token]').val(),
                                id:$('input[name=idparentesco]').val(),
                        Nombre:$('input[name=Nombre-Parentesco]').val()
                    },
                    success: function(data){
                        if ((data.errors)) { // si el ajax contiene errores agrega un label indicando el error 
                                $('.error').removeClass('hidden');
                                $('.error').text("Error: El "+ data.errors.Nombre); 
                          } else {

                                var datos=  "<tr class='parentesco" + data.id + "'>"+"<td>"+data.Parentesco+"</td>"
                                + "<td>"+"<button class='btn btn-success editar' data-toggle='modal' data-target='#' onclick=''><i class=' fa fa-fw fa-pencil'></i></button>"
                                + "<button class='btn btn-info eliminar-parentesco' data-id="+ data.id +"><i class='fa fa-fw fa-trash '></i></button>"                                   
                                +"</td>"+"</tr>";// variable guarda los nuevos valores

                                dat.replaceWith(datos); //reemplaza por los nuevos datos

                                $("#exito").modal("show"); //abre modal de exito
                                $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                                            $("#exito").modal("hide"); // cierra modal
                                            
                                            } );
                                 $("#editar_Parentesco").modal("hide"); // cierra modal
                                 }
                              
                    }
             });

    });