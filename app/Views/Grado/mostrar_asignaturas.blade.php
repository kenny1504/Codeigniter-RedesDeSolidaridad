<!--form para poder activar la ruta y poder guardar el registro--><!-- -->
<form id="mostrar_Materia-grado">
    <div class="modal  modal-info fade" id="mostrar_Materia-grados" >
              <div class="modal-dialog" >
                <div class="modal-content" >
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <th colspan="2">Asignaturas</th> 
                  </div>
                  <div class="modal-body "> <!--tabla de materias -->           
                  <table id="asignaturas_grado" class="table table-bordered table-hover text-black">                       
                </table>
                  </div>
                  <div class="modal-footer">
                  <input type="text" class="form-control hidden" name="id-Grado" id="id-Grado"> <!--Input para guardar id de grado-->
                    <button type="reset" class="btn btn-outline" data-dismiss="modal">cerrar</button>         
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog --> 
    </div>
</form>