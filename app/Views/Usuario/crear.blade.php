<!--form para poder activar la ruta y poder guardar el registro--><!-- -->
<form id="ingresar_usuario"  >
    <div class="modal  modal-info fade"  id="crear_usuario" >
              <div class="modal-dialog" >
                <div class="modal-content" >
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Ingresar Usario</h4>
                  </div>
                  <div class="modal-body ">
                  

                        <div class="register-box-body" style="background-color:#eee;" >
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Full name">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" placeholder="Nombre de usuario">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Contraseña">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <form>
                            <div class="form-group has-feedback">
                                <input type="text" id="cedula" class="form-control" placeholder="Cedula">
                                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                            </div>
                            </div>    

                <div class="modal-footer">
                    <button type="reset"  class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="button" onclick="return ValidarCedula(cedula.value);" class="btn btn-outline" id="Materia"  >Guardar</button>          
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->

              </div>        
            </div>
            </div>
</form>
