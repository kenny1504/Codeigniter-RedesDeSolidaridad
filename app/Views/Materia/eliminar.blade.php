<!-- Modal para eliminar Materia-->
<form  id="delete_Asignatura">
<div id="eliminar_Materia" class=" modal modal-danger fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title icon fa fa-check">Confirme si desea eliminar</h4>
      </div>
     
      <div class="modal-footer">
        <input type="text" class="hidden" id="id_Asignatura" name="id_Asignatura" > <!-- captura el id_Asignatura del id de la materia -->
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="confirmar">
          <span  class="icon fa fa-check " ></span>
        </button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>
      </div>
    </div>
  </div>
</div>
</form>