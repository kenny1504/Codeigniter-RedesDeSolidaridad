var dat; //variable global que guarda el dato "tr" (Fila a editar)


function mostrar_Materias_grados(button)
{
dat = $(button).closest("tr"); //captura toda la fila donde se efectuo el click (Editar)
var name =$(button).parents("tr").find("td").text(); //obtiene nombre de la materia (nuevo)
var ide=$(button).attr("data-id");//obtiene el id de la materia
//var name=$(button).attr("data-Nombre"); //anterior capturar nombre
$('#mostrar_Materia-grados').modal('show'); // abre ventana modal
$('#idmateria').val(ide);   //manda valor "id" a ventana modal Nombre
$('#Nombre-Materia').val(name);
}


$("#asignar-ma").click(function() { //ajax para cargar combobox Asignaturas y Grados

    $.ajax({
        type: 'POST',
        url: '/cargarmaterias/asignatura', // llamada a ruta para cargar combobox con datos de tabla materia
        dataType: "JSON", // tipo de respuesta del controlador
        success: function(data){ 
          $('#Asignaturas').empty();
        //ciclo para recorrer el arreglo de asignaturas
          data.forEach(element => {
              //variable para asignarle los valores al combobox
             var datos='<option style="color: blue;" value="'+element.id+'">'+element.Nombre+'</option>'; 
  
              $('#Asignaturas').append(datos); //ingresa valores al combobox
          });
          
      } 
      
    });//Fin ajax combobox Asignaturas
  
  
  });
  
  