
<!--form para poder activar la ruta y poder guardar el registro--><!-- -->
<form id="ingresar_turno"  >
  <div class="modal  modal-info fade"  id="modal_Turno" >
            <div class="modal-dialog" >
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ingresar Turno</h4>
                </div>
                <div class="modal-body ">
                  <div class="form-group">
                      <br>
                      <label for="Nombre_turno" class="col-sm-2 control-label requerido">Nombre</label>                
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Nombre_turno" id="Nombre_turno" placeholder="Turno"  required autocomplete="off">
                        <p class="error text-red hidden">error: </p>
                      </div>
                      <br><br>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-outline" id="turno_guardar"  >Guardar</button>          
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
  </div>
</form>