
function mostrar_Materias_grados(button)
{
    var ide=$(button).attr("data-id");//obtiene el id del grado
    var name="Grado = " +$(button).attr("data-Nombre"); //captura el grado (Nombre)
    $('#mostrar_Materia-grados').modal('show'); // abre ventana modal
    $('#grado').text(name);   //manda el grado a la modal
    $('#id-Grado').val(ide);   //manda el idgrado a la modal

    $('#asignaturas_grado').empty(); //limpia la tabla
    $.ajax({
        type: 'POST',
        url: '/cargarmaterias_grado/grupo', // llamada a ruta para cargar asignaturas en las tablas
        data: $('#mostrar_Materia-grado').serialize(), // manda el form donde se encuentra la modal 
        dataType: "JSON", // tipo de respuesta del controlador
        success: function(data){ 
              if(data!=false)
              {
                data.forEach(element => {
                    var datos=  "<tr id=" + element.id + ">"+"<td>"+element.Nombre+"</td>"
                        + "<td>"+ "<button class='btn btn-success' data-id="+ element.id +" onclick='eliminar(this);'><i class='fa fa-fw fa-trash '></i></button>"                                   
                        +"</td>"+"</tr>"; // variable guarda el valor del registro de materias
                    $('#asignaturas_grado').append(datos); // agrega nuevo registro a tabla
                });

              }
              else
              {
                $("#asignaturas_grado").removeClass('text-black'); //remueve clase que asigna el color negro al texto
                $("#asignaturas_grado").addClass('text-red');//agrega clase que asigna el color rojo al texto
                var dato= "<th colspan='2'>No Se Encontraron Asignaturas En Este Grado</th>";
                $('#asignaturas_grado').append(dato); // agrega nuevo registro a tabla
              }      
      } 
      
    });//Fin ajax cargar materias en tabla
}


  