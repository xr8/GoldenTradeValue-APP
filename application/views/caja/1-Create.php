<!-- Modal NEW - Saldo Inicial -->
<div class="modal fade " id="saldoinicialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GoldenTradeValue - Saldo Inicial Mes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <p class="font-weight-light text-left">Nombre:                   <span id="">Golden Trade Value</span></p>  
            <p class="font-weight-light text-left">Saldo Inicial del Mes de: <span id="saldoIncialfecha"><?php echo date("Y-M")."-01"; ?></span></p>
            <p class="font-weight-light text-left">Tipo:                     <span id="">Entrada</span></p>
            <p class="font-weight-light text-left">Concepto:                 <span id="">Saldo Inicial</span></p>
          </div>

          <div class="form-group">
            <label for="exampleInputMonto">Saldo Incial</label>
            <input type="text" class="form-control" id="saldoInicial" aria-describedby="saldoHelp">
            <small id="saldHelp" class="form-text text-muted">Saldo Incial <span id="saldoincialformat">$00.00</span></small>
          </div>

          <div class="form-group">
            <label for="exampleInputTotalbilletes">Total billetes</label>
            <input type="text" class="form-control" id="totalbilletesInicial" aria-describedby="totalbilletesHelp">
            <small id="totalbilletesHelp" class="form-text text-muted">Total Billetes</small>
          </div>

          <div class="form-group">
            <label for="exampleInputNotas">Notas</label>
            <textarea class="form-control" id="notasInicial" aria-describedby="notasHelp"></textarea>
            <small id="notasHelp" class="form-text text-muted">Notas</small>
          </div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary text-capitalize" data-dismiss="modal">cerrar ventana</button>
        <button type="button" class="btn btn-success   text-capitalize" id="b-saldoInicial">guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal NEW  Saldo Inicial --->


<!-- Modal NEW -->
<div class="modal fade " id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GoldenTradeValue - Registro Caja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <p class="font-weight-light text-right">Saldo Total Actual: <span id="nuevoTotal">Loading</span></p>
          <input type="hidden" id="saldoActualinput">

          <div class="form-group">
            <label for="exampleInputMonto">Fecha</label>
            <input type="date" class="form-control" id="caja-nuevoFecha">
          </div>

          <div class="form-group">
            <label for="exampleInputRfc">Tipo</label>
            <select id="caja-tipo" name="tipo"  aria-describedby="tipoHelp" class="form-control">
              <option value="entrada">Entrada</option>
              <option value="salida">Salida</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputMonto">Monto</label>
            <input type="text" class="form-control" id="caja-monto" aria-describedby="montoHelp">
            <small id="montoHelp" class="form-text text-muted">Monto</small>
          </div>


          <div class="form-group">
            <label for="exampleInputRfc">No Compra</label>
            <input type="text" class="form-control" id="caja-nocompra" aria-describedby="nocompraHelp">
            <small id="nocompraHelp" class="form-text text-muted">No compra</small>
          </div>

          <div class="form-group">
            <label for="exampleInputNombre">Nombre</label>
            <input type="text" class="form-control bs-autocomplete" id="caja-nombre" aria-describedby="nombreaHelp">
            <small id="nombreHelp" class="form-text text-muted">Nombre</small>
          </div>

          <div class="form-group">
            <label for="exampleInputConcepto">Concepto</label>
            <textarea class="form-control" id="caja-concepto" aria-describedby="conceptoHelp"></textarea>
            <small id="conceptoHelp" class="form-text text-muted">Concepto</small>
          </div>

          <div class="form-group">
            <label for="exampleInputTotalbilletes">Total billetes</label>
            <input type="text" class="form-control" id="caja-billetes" aria-describedby="totalbilletesHelp">
            <small id="totalbilletesHelp" class="form-text text-muted">Total Billetes</small>
          </div>

          <div class="form-group">
            <label for="exampleInputNotas">Notas</label>
            <textarea class="form-control" id="caja-notas" aria-describedby="notasHelp"></textarea>
            <small id="notasHelp" class="form-text text-muted">Notas</small>
          </div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary text-capitalize" data-dismiss="modal">cerrar ventana</button>
        <button type="button" class="btn btn-success   text-capitalize" id="b-new-caja">guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal NEW -->