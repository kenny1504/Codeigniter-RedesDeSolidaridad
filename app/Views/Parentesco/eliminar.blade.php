<!-- Modal para eliminar Materia-->

<div id="eliminar_Parentesco"class=" modal modal-danger fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title icon fa fa-check">Desea Eliminar El Parentesco?</h4>
        </div>
       
        <div class="modal-footer">
          <input type="text" class="hidden" id="valor" name="valor" > <!-- captura el valor del id del parentesco -->
          <button type="button" class="btn btn-danger" data-dismiss="modal" id="confirmar_Parentesco">
            <span  class="icon fa fa-check " ></span>
          </button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">
            <span class="glyphicon glyphicon"></span>close
          </button>
        </div>
      </div>
    </div>
  </div>