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
            <p class="font-weight-light text-left">Nombre: <span id="">Golden Trade Value</span></p>
            <p class="font-weight-light text-left">Saldo Inicial del Mes de: <span id="saldoIncialfecha"><?php echo date("Y-M") . "-01"; ?></span></p>
            <p class="font-weight-light text-left">Tipo: <span id="">Entrada</span></p>
            <p class="font-weight-light text-left">Concepto: <span id="">Saldo Inicial</span></p>
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GoldenTradeValue - Registro Caja</h5>
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
                  <input type="date" class="form-control" id="caja-nuevoFecha" placeholder="dd/mm/aaaa">
                </div>
                <!-- Fecha:-->

                <!-- Nombre:-->
                <div class="form-group">
                  <label for="exampleInputNombre">Nombre</label>
                  <div class="input-group input-medium " style="float: right; padding-top: 3px; ">
                    <input type="text" class="form-control bs-autocomplete search-input" id="caja-nombre" aria-describedby="nombreaHelp" placeholder="Golden Trade Value">
                  </div>
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

              </div>
              <!-- col 1 --->

              <!-- col 2 --->              
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <!-- Tipo:-->
                <div class="form-group">
                  <label for="exampleInputRfc">Tipo</label>
                  <select id="caja-tipo" name="tipo" aria-describedby="tipoHelp" class="form-control">
                    <option value="null">Opciones</option>
                    <option value="entrada">Entrada</option>
                    <option value="salida">Salida</option>
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
                
                <!-- Total Billetes:-->
                <div class="form-group">
                  <label for="exampleInputTotalbilletes">Total billetes</label>

                  <!-- X -->
                  <p><a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Añadir monedas y billetes</a></p>

                  <div class="row">
                    <div class="col">
                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="cardx card-body">
                          <ul class="list-group">
                            <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-info text-light">Monedas</li>

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

                            <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-dark text-light">
                              <div class="col-8 text-left">Sub Total Monedas</div>
                              <div class="col-4 text-center" id="subTotalMonedas">$00.00</div>
                            </li>

                            <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-info text-light">Billetes</li>

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

                            <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-dark text-light">
                              <div class="col-8 text-left">Sub Total Billetes</div>
                              <div class="col-4 text-center" id="subTotalBilletes">$00.00</div>
                            </li>

                            <li class="list-group-item disabled d-flex justify-content-between align-items-center bg-primary text-light"">
                              <div class=" col-8 text-left">Total</div>
                              <div class="col-4 text-center" id="totalMonedasBilletes">$00.00</div>
                              <input type="hidden" id="totalMBData" disabled>
                            </li>                            
                            
                          </ul>                        

                          <p class="mt-5"><a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Añadir monedas y billetes</a></p>
                        
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- X -->
                  
                </div>
                <!-- Total Billetes:-->

              </div>
              <!-- col 2 --->                

            </div>
          </div>

        </form>
      </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary text-capitalize" data-dismiss="modal" id="cajaCerrar">cerrar ventana</button>
      <button type="button" class="btn btn-success   text-capitalize"                      id="b-new-caja" disabled>guardar</button>
    </div>
  </div>
</div>
</div>
<!-- Modal NEW -->