$("#asignar-ma").click(function() { //ajax para cargar combobox Asignaturas y Grados
cargamateria="/cargarmaterias/asignatura";//kenny
cargamateria1="cargarmaterias/asignatura";//Sandino
  $.ajax({
      type: 'POST',
      url: cargamateria1, // llamada a ruta para cargar combobox con datos de tabla materia
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
cargagrado="/cargargrados/asignatura";//kenny
cargagrado1="cargargrados/asignatura";//sandino
  $.ajax({
    type: 'POST',
    url: cargagrado1, // llamada a ruta para cargar combobox con datos de tabla grados
    dataType: "JSON", // tipo de respuesta del controlador
    success: function(data){ 
    
      $('#Grados').empty();
 //ciclo para recorrer el arreglo de grados
      data.forEach(element => {
          //variable para asignarle los valores al combobox
         var datos='<option style="color: blue;" value="'+element.id+'">'+element.Grado+'</option>';

          $('#Grados').append(datos);//ingresa valores al combobox
      });
      
  }
  
});//Fin ajax combobox Asignaturas

});



$("#asignar_Mate").click(function() { // ajax para guardar en la tabla detalleAsignatura

    $.ajax({
      type: 'POST', 
      url: '/detalleAsignatura/guardar', // llamada a ruta para cargar combobox con datos de tabla materia
      data: $('#asignar_materia').serialize(), // manda el form donde se encuentra la modal dataType: "JSON", // tipo de respuesta del controlador
      dataType: "JSON", // tipo de respuesta del controlador
      success: function(data){ 

        $("#asignar_materia_confirmar").modal("hide"); // cierra modal confirmar
        $("#asignar_asignatura").modal("hide"); // cierra modal de asignacion de materias
        $("#exito").modal("show"); //abre modal de exito
        $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                 $("#exito").modal("hide"); // cierra modal exito
                 } );
    } 
    
  });//Fin ajax guardar materia asignada


});
