$("#asignar-ma").click(function() { //ajax para cargar combobox Asignaturas y Grados

  $.ajax({
      type: 'POST',
      url: '/cargarmaterias/asignatura', // llamada a ruta para cargar combobox con datos de tabla materia
      dataType: "JSON", // tipo de respuesta del controlador
      success: function(data){ 
      //ciclo para recorrer el arreglo de asignaturas
        data.forEach(element => {
            //variable para asignarle los valores al combobox
           var datos='<option style="color: blue;" value="'+element.id+'">'+element.Nombre+'</option>'; 

            $('#Asignaturas').append(datos); //ingresa valores al combobox
        });
        
    } 
    
  });//Fin ajax combobox Asignaturas

  $.ajax({
    type: 'POST',
    url: '/cargargrados/asignatura', // llamada a ruta para cargar combobox con datos de tabla grados
    dataType: "JSON", // tipo de respuesta del controlador
    success: function(data){ 
    
 //ciclo para recorrer el arreglo de grados
      data.forEach(element => {
          //variable para asignarle los valores al combobox
         var datos='<option style="color: blue;" value="'+element.id+'">'+element.Grado+'</option>';

          $('#Grados').append(datos);//ingresa valores al combobox
      });
      
  }
  
});//Fin ajax combobox Asignaturas

});
