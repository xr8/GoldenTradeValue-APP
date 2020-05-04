<!-- Modal UPDATE -->
<div class="modal fade " id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GoldenTradeValue - Proveedores Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
            <label for="updateInputNombre">Nombre</label>
            <input type="text" class="form-control" id="updateInputNombre" aria-describedby="updatenombreHelp">
            <small id="updatenombreHelp" class="form-text text-muted">Nombre (s) ejemplo Juan Carlos.</small>
          </div>

          <div class="form-group">
            <label for="updateInputApellido">Apellido</label>
            <input type="text" class="form-control" id="updateInputApellido" aria-describedby="updateapellidoHelp">
            <small id="updateapellidoHelp" class="form-text text-muted">Apellido (s) ejemplo Hernandez Garcia.</small>
          </div>

          <div class="form-group">
            <label for="updateInputEmail">Email</label>
            <input type="email" class="form-control" id="updateInputEmail" aria-describedby="updateemailHelp">
            <small id="emailHelp" class="form-text text-muted">Email ejemplo usuario@gmai.com recuerda el email se ocupará para recuperación del password.</small>
          </div>

          <div class="form-group">
            <label for="updateInputTelefono">Telefono</label>
            <input type="text" class="form-control" id="updateInputTelefono" aria-describedby="updatetelefonoHelp">
            <small id="updatetelefonoHelp" class="form-text text-muted">Telefono ejemplo 55 1050 2040</small>
          </div>


        </form>                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary text-capitalize"   data-dismiss="modal">cerrar ventana</button>
        <button type="button" class="btn btn-primary   text-capitalize"   id="btnUpdateUser">actualizar proveedor</button>
      </div>        
      </div>
    </div>
  </div>
</div>
