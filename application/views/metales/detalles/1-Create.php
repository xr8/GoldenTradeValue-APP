<!-- BTNS -->

<!-- CREATE -->
  
  <!-- Modal Cierre-->
    <div class="modal fade" id="cierreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Generar Cierre</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form>

                <div class="container">
                    <div class="row">

                        <div class="col">
                        </div>

                        <div class="col">

                            <div class="form-group">
                                <label for="detail_fecha">Fecha</label>
                                <input type="date" class="form-control" id="generar_c_fecha" aria-describedby="detail_fechaHelp">
                                <small id="detail_fechaHelp" class="form-text text-muted">Fecha DD/MM/YYYY</small>
                            </div>

                            <div class="form-group">
                                <label for="detail_tipo">Tipo</label>
                                <select class="form-control" id="generar_c_tipo">
                                    <option               > - Opciones -</option>
                                    <option value="compra">   Compra</option>
                                </select>
                                <small id="detail_tipoHelp" class="form-text text-muted">Tipo de transacción.</small>
                            </div> 

                            <div class="form-group">
                                <label for="FormControlPeso">Peso</label>
                                <input type="text" class="form-control" id="generar_c_grs" aria-describedby="FormControlPesoHelp" placehBuscarolder="Peso en Grs">
                                <small id="FormControlPesoHelp" class="form-text text-muted" ho>Peso en Grs</small>
                            </div>

                            <div class="form-group">
                                <label for="FormControlPrecio">Precio</label>
                                <input type="text" class="form-control" id="generar_c_precio" aria-describedby="FormControlPrecio" placehBuscarolder="Precio">
                                <small id="FormControlPrecioHelp" class="form-text text-muted" ho>Precio</small>
                            </div>

                        </div>

                    </div>
                </div>

            </form>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Cierre</button>
            <button type="button" class="btn btn-primary" id="btnGenerarCierre">Generar Cierre</button>
          </div>
        </div>
      </div>
    </div>
  <!-- Modal Cierre-->


  <!-- Modal Generar Entrega primero selecion un cierre para generar una entrega-->
  <div class="modal fade" id="entregaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Generar Entrega...</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" id="cierreEntrega" class="" disabled hidden>

          <!-- entregas -->
          <div class="row bg-white">
              <div class="col-5 offset-1">


                <div class="mb-3">
                  <label for="firstName">No. Ext</label>
                  <input type="text" class="form-control" id="input_nolext" placeholder="" value="0" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="mb-3">
                  <label for="firstName">Grs a/f</label>
                  <input type="text" class="form-control" id="input_grsaf" placeholder="" value="0" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>


                <div class="mb-3">
                  <label for="firstName">No Vale</label>
                  <input type="text" class="form-control" id="input_novale" placeholder="" value="0" required="" disabled>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

              </div>

              <div class="col-5">

                  <div class="mb-3">
                    <label for="firstName">Barra</label>
                    <input type="text" class="form-control" id="input_barra" placeholder="" value="" required="">
                    <div class="invalid-feedback">Valid first name is required.</div>
                  </div>

                  <div class="mb-3">
                    <label for="firstName">Ley</label>
                    <input type="text" class="form-control" id="input_ley" placeholder="" value="" required="">
                    <div class="invalid-feedback">Valid first name is required.</div>
                  </div>

                  <div class="mb-3">
                    <label for="firstName">Fino</label>
                    <input type="text" class="form-control" id="input_fino" placeholder="" value="" required="" disabled data-toggle="tooltip" data-placement="top" title="barra*ley/24">
                    <div class="invalid-feedback">Valid first name is required.</div>
                  </div>

              </div>

          </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Entrega</button>
          <button type="button" class="btn btn-primary" id="btnGenerarEntrega">Generar Entrega</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Pagos-->
    <div class="modal fade" id="pagosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Generar Pago</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>

          <div class="modal-body">
            <div class="container">
                <div class="row">

                  <div class="col">
                    <p></p>
                    total
                    pagos
                      tipo
                    saldo
                    observaciones

                    <div class="form-group">
                        <label for="FormControlPrecio">total</label>
                        <input type="text" class="form-control"         id="generarPagoTotal"   aria-describedby="FormControlPrecio" placehBuscarolder="Precio" value="0.00" disabled>
                        <small             class="form-text text-muted" id="FormControlPrecioHelp" >total</small>
                    </div>
                    <div class="form-group">
                        <label for="FormControlPrecio">pagos</label>
                        <input type="text" class="form-control"         id="generarPago"   aria-describedby="FormControlPrecio" placehBuscarolder="Precio">
                        <small             class="form-text text-muted" id="FormControlPrecioHelp" >pagos</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">tipo</label>
                      <select name="select" class="form-control" id="generarTipoPago">
                        <option name="pago"    >pago</option>
                        <option name="anticipo">anticipo</option>
                        <option name="prestamo">prestamo</option>
                      </select>
                      <small             class="form-text text-muted" id="FormControlPrecioHelp" >tipo de pago</small>
                    </div>                      
                    <div class="form-group">
                        <label for="FormControlPrecio">saldo</label>
                        <input type="text" class="form-control"         id="generarSaldo"   aria-describedby="FormControlPrecio" placehBuscarolder="Precio" disabled>
                        <small             class="form-text text-muted" id="FormControlPrecioHelp" >saldo</small>
                    </div>
                    <div class="form-group">
                        <label for="FormControlPrecio">observaciones</label>
                        <textarea class="form-control" id="generarObservaciones" rows="3"></textarea>
                        <small             class="form-text text-muted" id="FormControlPrecioHelp" >observaciones</small>
                    </div>                                            
                </div>

                </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
            <button type="button" class="btn btn-primary" id="btnGenerarPago">generar pago</button>
          </div>

        </div>
      </div>
    </div>
  <!-- Modal Pagos-->

<!-- CREATE -->