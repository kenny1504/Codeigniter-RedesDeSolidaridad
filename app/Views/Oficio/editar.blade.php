<form id="editar-oficio" >
  <div class="modal  modal-info fade" id="editar_Oficio" >
            <div class="modal-dialog" >
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Editar Oficio</h4>
                </div>
                <div class="modal-body ">
                  <div class="form-group">
                      <br>
                      <label for="Nombre-Oficio" class="col-sm-2 control-label requerido">Nombre</label>                
                      <div class="col-sm-10">
                      <input type="text" class="hidden" id="idoficio" name="idoficio" > <!-- captura el valor del id de la materia -->
                      <input type="text" class="form-control" name="Nombre-Oficio" id="Nombre-Oficio"  required autocomplete="off" onkeypress="Ingresar_ofi(event)" > <!-- captura el nombre del oficio -->
                        <p class="error text-red hidden">error: </p> <!-- todo error es mostrado aqui -->
                      </div>
                      <br><br>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                  <button type="button"  class="btn btn-outline" id="editar_confirmar_Oficio"  >Guardar</button>          
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->           
  </div>
</form>