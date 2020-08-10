<style>
  .ui-helper-hidden-accessible {
    display: none
  }

  .ui-front {
    background-color: #fff;
    width: 250px;
    align-content: left;
  }

  .ui-menu-item {
    list-style-type: none;
  }

  .ul.ui-autocomplete.ui-menu {
    z-index: 10000;
    position: relative;
  }

  #ui-id-1 {
    z-index: 10000;
    text-transform: capitalize;
  }
</style>

<!-- Modal NEW - Saldo Inicial -->
<div class="modal fade " id="saldoinicialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GoldenTradeValue - Saldo Inicial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>
          <div class="container">
            <div class="row">

              <div class="col-12">
                <!-- Saldo Tota:-->
                <p class="font-weight-light text-right">Saldo Total Actual: <span id="nuevoTotal">Loading</span></p>
                <input type="hidden" id="saldoActualinput">
                <!-- Saldo Tota:-->
              </div>

              <!-- col 1 --->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <!-- Fecha:-->
                <div class="form-group">
                  <label for="exampleInputMonto">Fecha</label>
                  <input type="date" class="form-control" id="caja-nuevoFecha" placeholder="dd/mm/aaaa" disabled>
                  <small id="fechaHelp" class="form-text text-muted">Fecha</small>
                </div>
                <!-- Fecha:-->

                <!-- Nombre:-->
                <div class="form-group">
                  <label for="exampleInputNombre">Nombre</label>
                  <div class="input-group input-medium " style="float: right; padding-top: 3px; ">
                    <input type="search" id="buscador" class="form-control text-lowercase" name="q" val="" placeholder="Buscar Usuario, Clientes o Provedores..." autocomplete="off">
                  </div>
                  <input type="hidden" id="result" class="" name="" val="" disabled>
                  <small id="nombreHelp" class="form-text text-muted">Nombre</small>
                </div>
                <!-- Nombre:-->

                <!-- Concepto:-->
                <div class="form-group">
                  <label for="exampleInputConcepto">Concepto</label>
                  <textarea class="form-control" id="caja-concepto" aria-describedby="conceptoHelp" placeholder="Concepto Compra, Venta, Comisión"></textarea>
                  <small id="conceptoHelp" class="form-text text-muted">Concepto</small>
                </div>
                <!-- Concepto:-->

                <div class="form-group">
                  <label for="exampleInputNotas">Notas</label>
                  <textarea class="form-control" id="caja-notas" aria-describedby="notasHelp" placeholder="Notas de la transacción"></textarea>
                  <small id="notasHelp" class="form-text text-muted">Notas</small>
                </div>

                <!-- Total Billetes:-->
                <div class="form-group">
                  <label for="exampleInputTotalbilletes">Total billetes</label>
                  <!-- X -->
                  <p class="mt-5">
                    <a class="btn-addMB btn bg-secondary text-light" data-toggle="collapse" href="#multiCollapseExample1-x" role="button" aria-expanded="false" aria-controls="multiCollapseExample1-x">
                      Añadir monedas y billetes
                    </a>
                  </p>
                  <!-- X -->
                </div>
                <!-- Total Billetes:-->

              </div>
              <!-- col 1 --->

              <!-- col 2 --->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <!-- Tipo:-->
                <div class="form-group">
                  <label for="exampleInputRfc">Tipo</label>
                  <select id="caja-tipo" name="tipo" aria-describedby="tipoHelp" class="form-control">
                    
                  </select>
                </div>
                <!-- Tipo:-->

                <!-- Momento:-->
                <div class="form-group">
                  <label for="exampleInputMonto">Monto</label>
                  <input type="text" class="form-control" id="caja-monto" aria-describedby="montoHelp" placeholder="Monto $00.00">
                  <small id="montoHelp" class="form-text text-muted">Monto</small>
                </div>
                <!-- Momento:-->

                <!-- No compra:-->
                <div class="form-group">
                  <label for="exampleInputRfc">No Compra</label>
                  <input type="text" class="form-control" id="caja-nocompra" aria-describedby="nocompraHelp" placeholder="No Compra">
                  <small id="nocompraHelp" class="form-text text-muted">No compra</small>
                </div>
                <!-- No compra:-->

              </div>
              <!-- col 2 --->

              <!-- col 3 --->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                  <div class="cardx card-body">

                    <div class="row">
                      <!-- col a --->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <ul class="list-group">
                          <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-dark text-light">Monedas</li>

                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">￠ 0.50</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-monedas moneda-50c" id="" placeholder="0" value="" required=""> </div>
                          </li>

                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 1.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-monedas moneda-1p" id="" placeholder="0" value="" required=""> </div>
                          </li>

                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 2.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-monedas moneda-2p" id="" placeholder="0" value="" required=""> </div>
                          </li>

                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 5.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-monedas moneda-5p" id="" placeholder="0" value="" required=""> </div>
                          </li>

                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 10.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-monedas moneda-10p" id="" placeholder="0" value="" required=""> </div>
                          </li>
                        </ul>
                      </div>
                      <!-- col a --->

                      <!-- col b--->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <ul class="list-group">
                          <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-dark text-light">Billetes</li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 20.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-mb billete-20p" id="" placeholder="0" value="" required=""> </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 50.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-mb billete-50p" id="" placeholder="0" value="" required=""> </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 100.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-mb billete-100p" id="" placeholder="0" value="" required=""> </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 200.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-mb billete-200p" id="" placeholder="0" value="" required=""> </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 500.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-mb billete-500p" id="" placeholder="0" value="" required=""> </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-4 text-center">$ 1000.00</div>
                            <div class="col-4 text-center">X</div>
                            <div class="col-4 text-center"><input type="text" class="form-control calc-mb billete-1000p" id="" placeholder="0" value="" required=""> </div>
                          </li>
                        </ul>
                      </div>
                      <!-- col b --->
                    </div>

                    <div class="row">
                      <!-- col c --->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <ul class="list-group">
                        <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-success text-light">
                            <div class="col-8 text-left">Monto</div>
                            <div class="col-4 text-center" id="cajaMonto">$00.00</div>
                          </li>                          
                        </ul>
                        <!-- X -->
                        <p class="mt-5">
                          <a class="btn-addMB btn bg-secondary text-light" data-toggle="collapse" href="#multiCollapseExample1-x" role="button" aria-expanded="false" aria-controls="multiCollapseExample1-x">
                            Añadir monedas y billetes
                          </a>
                        </p>
                        <!-- X -->
                      </div>
                      <!-- col c --->

                      <!-- col d --->
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <ul class="list-group">
                          <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-dark text-light">
                              <div class="col-8 text-left">Sub Total Monedas</div>
                              <div class="col-4 text-center" id="subTotalMonedas">$00.00</div>
                              <input type="hidden" id="subTotalMonedasCalc" disabled>
                            </li>                          
                          <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-dark text-light">
                            <div class="col-8 text-left">Sub Total Billetes</div>
                            <div class="col-4 text-center" id="subTotalBilletes">$00.00</div>
                            <input type="hidden" id="subTotalBilletesCalc" disabled>
                          </li>
                          <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-primary text-light"">
                            <div class=" col-8 text-left">Total</div>
                            <div class="col-4 text-center" id="totalMonedasBilletes">$00.00</div>
                            <input type="hidden" id="totalMBData" disabled>
                            <input type="hidden"   id="totalMBstring" disabled>
                          </li>
                        </ul>
                      </div>
                      <!-- col d --->
                    </div>

                  </div>
                </div>
              </div>
              <!-- col 3 --->

          </div>
      </div>
      </form>
    </div>

    <div class="modal-footer">
      <button id="cajaCerrar" class="btn btn-secondary text-capitalize" type="button"  data-dismiss="modal" >cerrar ventana</button>
      <button id="b-new-caja" class="btn btn-success   text-capitalize" type="button"  disabled>guardar</button>
    </div>

  </div>
</div>
</div>
<!-- Modal NEW  Saldo Inicial --->
