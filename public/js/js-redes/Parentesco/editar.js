var dat; //variable global que guarda el dato "tr" (Fila a editar)

<<<<<<< Updated upstream

function editar_Parentesco(button)
{
dat = $(button).closest("tr"); //captura toda la fila donde se efectuo el click (Editar)
var name =$(button).parents("tr").find("td").text(); //obtiene nombre del parentesco (nuevo)
var ide=$(button).attr("data-id");//obtiene el id del parentesco
=======
$(".editarparentesco").click(function() { // ajax para editar un parentesco
dat = $(this).closest("tr"); //captura toda la fila donde se efectuo el click (Editar)
var ide=$(this).attr("data-id");//obtiene el id del parentesco
var name=$(this).attr("data-Nombre");//obtiene nombre del parentesco
>>>>>>> Stashed changes
$('#editar_Parentesco').modal('show'); // abre ventana modal
$('.error').addClass('hidden'); // oculta error del servidor(validacion-servidor)
$('#idparentesco').val(ide);   //manda valor "id" a ventana modal Nombre
$('#Nombre-Parentesco').val(name);
<<<<<<< Updated upstream
}

function Ingresar_parent(e) { // Metodo para guardar(editar) datos los datos al presionar ENTER 
=======
}); 


function Ingresar(e) { // Metodo para guardar(editar) datos los datos al presionar ENTER 
>>>>>>> Stashed changes
    var tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13) // si es 13 entonces presiono ENTER
    {
        $("#editar_confirmar_Parentesco").click(); // llama al evento click "editar_confirmar_Oficio"
    }
  }
<<<<<<< Updated upstream
    $("#editar_confirmar_Parentesco").click(function() {
        $.ajax({
                
                    type: 'POST',
                    url: 'parentesco/actualizar', // ruta editar parentesco
                    data: $('#editar-parentesco').serialize(), // manda el form donde se encuentra la modal parentesco
                    dataType: "JSON", // tipo de respuesta del controlador
                    success: function(data){
                        if ((data.msg!=true)) { // si el ajax contiene errores agrega un label indicando el error 
                                $('.error').removeClass('hidden');
                                $('.error').text("Error: "+ data.Parentesco); 
                          } else {
                                var datos=  "<tr id=" + data.id + ">"+"<td>"+data.Parentesco+"</td>"
                                + "<td>"+"<button class='btn btn-success'  onclick='editar_Parentesco(this);' data-id="+ data.id +" data-Nombre="+data.Parentesco+"><i class=' fa fa-fw fa-pencil'></i></button>"
                                + "<button class='btn btn-info ' onclick='eliminar_parentesco(this);' data-id="+ data.id +"><i class='fa fa-fw fa-trash '></i></button>"                                   
                                +"</td>"+"</tr>";// variable guarda los nuevos valores

                                dat.replaceWith(datos); //reemplaza por los nuevos datos
=======

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

>>>>>>> Stashed changes
                                $("#exito").modal("show"); //abre modal de exito
                                $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                                            $("#exito").modal("hide"); // cierra modal
                                            
                                            } );
                                 $("#editar_Parentesco").modal("hide"); // cierra modal
                                 }
                              
                    }
             });

    });