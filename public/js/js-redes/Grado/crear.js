

$("#m,#m2").click(function(){ // agrega la clase hidden para ocultar label error
    $('.error').addClass('hidden');
    $("#Nombre_grado-error").addClass('hidden');

  });

  $("#grado_guardar").click(function() { //ajax para ingresar grado
 
    if($('input[name=Nombre_grado]').val()!="") // si el input contiene valores entra 
    {
    $.ajax({
      type: 'POST',
      url: 'agregar/grado', //llamada a la ruta ingresar grado
      data: $('#ingresar_grado').serialize(), // manda el form donde se encuentra la modal grado
      dataType: "JSON", // tipo de respuesta del controlador
      success: function(data){ //agregar el nuevo ingreso a la tabla
        if ((data.msg!=true)) { // si el ajax contiene errores agrega un label indicando el error 
          $('.error').removeClass('hidden');
          $("#Nombre_grado-error").addClass('hidden');
          $('.error').text("Error: El "+ data.Nombre); 
        } else {
        var datos=  "<tr id=" + data.id + ">"+"<td>"+data.Nombre+"</td>"
        + "<td>"+"<button class='btn btn-success' data-id="+ data.id +"  onclick='editar_Grado(this);' ><i class=' fa fa-fw fa-pencil'></i></button>"
        + "<button class='btn btn-info' data-id="+ data.id +" onclick='eliminacion_grado(this);'><i class='fa fa-fw fa-trash '></i></button>"                                   
        +"</td>"+"</tr>"; // variable guarda el valor 
       $('#grados').append(datos); // agrega nuevo registro a tabla
        
       $("#exito").modal("show"); //abre modal de exito
       $("#exito").fadeTo(2000,500).slideUp(450,function(){   // cierra la modal despues del tiempo determinado  
                $("#exito").modal("hide"); // cierra modal
                } );
      }
    }
    });
    $('#Nombre_grado').val(''); // limpiar el input Nombre
    }
    else { // si el input esta vacio
      $("#Nombre-error").removeClass('hidden'); //muestra el campo Validacion (validacion-cliente)
      $('.error').addClass('hidden'); // oculta error del servidor(validacion-servidor)
    }


  }); //fin del ajax