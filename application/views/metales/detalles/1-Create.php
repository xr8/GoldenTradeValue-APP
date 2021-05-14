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
                      <input type="text" class="form-control"         id="generarPagoTotal"   aria-describedby="FormControlPrecio" placehBuscarolder="Precio">
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
                      <input type="text" class="form-control"         id="generarSaldo"   aria-describedby="FormControlPrecio" placehBuscarolder="Precio">
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



  <!-- Modal Cierre-->
  <div class="modal fade" id="saldoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Saldo Base</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form>

              <div class="container">
                  <div class="row">
                      <div class="col">
                      <p>No existen operaciones para este cliente , debes de generar un saldo base para poder seguir.</p>
                      </div>

                      <div class="col">

                          <div class="form-group">
                              <label for="detail_fecha">Fecha</label>
                              <input type="date" class="form-control" id="generar_fecha_saldo" aria-describedby="detail_fechaHelp">
                              <small id="detail_fechaHelp" class="form-text text-muted">Fecha DD/MM/YYYY</small>
                          </div>

                          <div class="form-group">
                              <label for="FormControlPrecio">Saldo Base</label>
                              <input type="text" class="form-control" id="generar_saldo_saldo" aria-describedby="FormControlPrecio" placehBuscarolder="Precio">
                              <small id="FormControlPrecioHelp" class="form-text text-muted" ho>Saldo Base</small>
                          </div>

                      </div>

                  </div>
              </div>

          </form>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
          <button type="button" class="btn btn-primary" id="btn_Save_saldo">guardar saldo base</button>
        </div>

      </div>
    </div>
  </div>



  <!-- Modal Cierre Simple con un cierre previo-->
  <div class="modal fade" id="cierreSimple" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">cierre simple</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">

          <!-- entregas -->
          <div class="row bg-white">

            <div class="col-12" >
              <h5 class="text-capitalize">cierres</h5>

                <div class="mb-3">
                    <label for="firstName">No vale actual</label>
                    <input type="text"id="save_vale_cs" value="0" disabled>
                  </div>

                  <div class="mb-3">
                    <label for="firstName">Fino/Pza</label>
                    <input type="text" class="form-control" id="input_cs_fino" placeholder="" value="" required="">
                    <div class="invalid-feedback">Fino/Pza</div>
                  </div>
                  <div class="mb-3">
                    <label for="firstName">Precio</label>
                    <input type="text" class="form-control" id="input_cs_precio" placeholder="" value="" required="">
                    <div class="invalid-feedback">Precio</div>
                  </div>                
                  <div class="mb-3">
                    <label for="firstName">Importe</label>
                    <input type="text" class="form-control" id="input_cs_importe" placeholder="" value="" required="" disabled>
                    <div class="invalid-feedback">Importe</div>
                  </div>             
            </div>
              
            <div class="col-12" >
              <h5 class="text-capitalize">pagos</h5>

              <div class="mb-3">
                  <label for="firstName">total</label>
                  <input type="text" class="form-control" id="input_cs_total" placeholder="" value="" required="" data-toggle="tooltip" data-placement="top" title=" = importe">
                  <div class="invalid-feedback">Total Unico.</div>
                </div>

                <div class="mb-3">
                  <label for="firstName">pagos</label>
                  <input type="text" class="form-control" id="input_cs_pagos" placeholder="" value="" required="">
                  <div class="invalid-feedback">Pago Unico.</div>
                </div>

                <div class="mb-3">
                  <label for="firstName">saldo</label>
                  <input type="text" class="form-control" id="input_cs_saldo" placeholder="" value="" required="" data-toggle="tooltip" data-placement="top" title="saldo actual + total - pago" disabled>
                  <div class="invalid-feedback">Saldo Unico.</div>
                </div>
                
                <div class="mb-3">
                  <label for="firstName">observaciones</label>
                  <textarea name="textarea" rows="10" cols="50" class="form-control" id="input_cs_observaciones" data-placement="top" title=""></textarea>
                  <div class="invalid-feedback">Saldo Unico.</div>
                </div>      

                
            </div>
        
          </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
          <button type="button" class="btn btn-primary" id="btnSaveCierreS">guardar cierre simple</button>
        </div>
        
      </div>
    </div>
  </div>

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

          <div class="row">
            <div class="col-12 shadow-sm p-3 mb-5 bg-white rounded">

              <div class="row ge-show-load">
                <div class="col-12 d-flex align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 ge-show d-none mb-2">
                    <ul class="list-group list-group-horizontal">
                      <li class="list-group-item active d-flex justify-content-between align-items-center flex-fill  text-uppercase font-weight-light en-txt">ID Cierre<span id="metales_id"    class="font-weight-bold">000   </span><input type="hidden" id="input_id_advance" disabled></li>
                      <li class="list-group-item active d-flex justify-content-between align-items-center flex-fill  text-uppercase font-weight-light en-txt">Tipo     <span id="metalesAccion" class="font-weight-bold">000  </span></li>
                      <li class="list-group-item active d-flex justify-content-between align-items-center flex-fill  text-uppercase font-weight-light en-txt">Fecha    <span id="metalesFecha"  class="font-weight-bold">000 </span></li>
                    </ul> 
                </div>

                <div class="col-4 ge-show d-none">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light en-txt">Precio                       <span id="metales_precio"  class="font-weight-bold">000 </span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light en-txt">Metal                        <span id="metalesTipo"     class="font-weight-bold">000 </span></li>                  
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light en-txt">Status                       <span id="metalesStatus"   class="font-weight-bold">000 </span></li>
                  </ul>   

                  <label for="firstName">No. Vale</label>
                  <input type="text" class="form-control" id="input_emnvaleE1" placeholder="" value="" required="" disabled="">
            
              
                </div>

                <div class="col-4 ge-show d-none">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light en-txt">Peso Original                <span id="metales_peso"  class="font-weight-bold">000        </span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light en-txt">Saldo  Original              <span id="metales_saldo" class="font-weight-bold">000       </span></li>                
                  </ul>            
                </div>  

                <div class="col-4 ge-show d-none">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light en-txt">Peso  Actual                 <span id="metales_peso_actual"  class="font-weight-bold">000 </span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light en-txt">Saldo Actual                 <span id="metales_saldo_actual" class="font-weight-bold">000       </span></li>                
                  </ul>            
                </div>  

              </div>


            </div>
          </div>   

          <!-- entregas -->
          <div class="row bg-white">
              <div class="col-12" ><h5 class="text-capitalize">entregas</h5></div>
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

  <!-- Modal Cierre multiple con entrega previa-->
  <div class="modal fade" id="entregasMultipleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generar Cierre $ <span class="saldoActual">loading</span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <input type="text" id="cierreEntrega" class="" disabled hidden>

          <div class="row ge-show-load2">
                <div class="col-12 d-flex align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
                </div>
          </div>

          <div class="row">
                <div class="col-12 ge-show2 d-none mb-2">
                    <ul class="list-group list-group-horizontal">
                      <li class="list-group-item active d-flex justify-content-between align-items-center flex-fill  text-uppercase font-weight-light">ID Cierre<span id="metales_id"    class="font-weight-bold">000   </span><input type="hidden" id="input_id_advance" disabled></li>
                      <li class="list-group-item active d-flex justify-content-between align-items-center flex-fill  text-uppercase font-weight-light">Tipo     <span id="metalesAccion" class="font-weight-bold">000  </span></li>
                      <li class="list-group-item active d-flex justify-content-between align-items-center flex-fill  text-uppercase font-weight-light">Fecha    <span id="metalesFecha"  class="font-weight-bold">000 </span></li>
                    </ul> 
                </div>

                <div class="col-4 ge-show2 d-none">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light">Precio                       <span id="metales_precio"  class="font-weight-bold">000 </span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light">Metal                        <span id="metalesTipo"     class="font-weight-bold">000 </span></li>                  
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light">Status                       <span id="metalesStatus"   class="font-weight-bold">000 </span></li>
                  </ul>   

                  <label for="firstName">No. Vale</label>
                  <input type="text" class="form-control" id="save_cierredos" placeholder="" value="" required="" disabled="">
            
              
                </div>

                <div class="col-4 ge-show2 d-none">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light">Peso Original                <span id="metales_peso"  class="font-weight-bold">000        </span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light">Saldo  Original              <span id="metales_saldo" class="font-weight-bold">000       </span></li>                
                  </ul>            
                </div>  

                <div class="col-4 ge-show2 d-none">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light">Peso  Actual                 <span id="metales_peso_actual"  class="font-weight-bold">000 </span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-light">Saldo Actual                 <span id="metales_saldo_actual" class="font-weight-bold">000       </span></li>                
                  </ul>            
                </div>  

              </div>
              
              

          <div class="row mb-5" id="cmPlus"><div class="col-12 text-right text-primary text-4xl"><i class="bi bi-plus-circle-fill" id="plusEntrega"></i></div></div>

          <div class="row" id="multiEntregas">

          <div class="col-12 rowEntrada ' + x + '">
          <!-- Begin: cierres no ' + x + '-->
          <div class="cmItem1  row col-10 offset-1 shadow-lg p-3 mb-5 bg-body rounded">
              <!--Begin:-->
              <div class="col-12" >
                <h5 class="text-capitalize">cierres</h5>

                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="firstName">Fino/Pza</label>
                      <input type="text" class="form-control 1 input_cm_fino" placeholder="" value="" required="">
                      <div class="invalid-feedback">Fino/Pza</div>
                    </div>
                    <div class="mb-3">
                      <label for="firstName">Precio</label>
                      <input type="text" class="form-control 1 input_cm_precio" placeholder="" value="" required="">
                      <div class="invalid-feedback">Precio</div>
                    </div> 
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="firstName">Importe</label>
                      <input type="text" class="form-control 1 input_cm_importe" placeholder="" value="" required="">
                      <div class="invalid-feedback">Importe</div>
                    </div>   
                  </div> 
                </div>
              </div>
              
              <div class="col-12" >
                <h5 class="text-capitalize">pagos</h5>
                
                <div class="row">
                  <div class="col-6">
                    
                    <div class="mb-3">
                      <label for="firstName">total</label>
                      <input type="text" class="form-control 1 input_cm_total" placeholder="" value="" required="" data-toggle="tooltip" data-placement="top" title=" = importe">
                      <div class="invalid-feedback">Total Unico.</div>
                    </div>

                    <div class="mb-3">
                      <label for="firstName">pagos</label>
                      <input type="text" class="form-control 1 input_cm_pagos" placeholder="" value="" required="">
                      <div class="invalid-feedback">Pago Unico.</div>
                    </div>

                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="firstName">saldo</label>
                      <input type="text" class="form-control 1 input_cm_saldo" placeholder="" value="" required="" data-toggle="tooltip" data-placement="top" title="saldo actual + total - pago">
                      <div class="invalid-feedback">Saldo Unico.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="mb-3">
                      <label for="firstName">observaciones</label>
                      <textarea name="textarea" rows="2" cols="50" class="form-control 1 input_cs_observaciones" data-placement="top" title=""></textarea>
                      <div class="invalid-feedback">Saldo Unico.</div>
                    </div>  
                  </div>
                </div>
                              
              </div>
              <!--End:-->
          </div>
          <!-- End: cierres no' + x + '-->
          </div>

          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Entrega</button>
          <button type="button" class="btn btn-primary" id="btnGenerarEntregaMultiple">Generar Entrega</button>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Entrega xxx-->
  <div class="modal fade" id="entregaUnicaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Generar Entrega$ <span class="saldoActual">loading</span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" id="cierreEntrega" class="" disabled hidden>

          <!-- entregas -->
          <div class="row bg-white">
              <div class="col-12" ><h5 class="text-capitalize">entregas unica</h5></div>
              
              <!-- -->
              <div class="col-5 offset-1">
                <div class="mb-3">
                  <label for="firstName">No. de Vale</label>
                  <input type="text" class="form-control" id="input_eu_nvale" placeholder="" value="" required="" disabled>
                  <div class="invalid-feedback">No de Vale Unico.</div>
                </div>              
              </div>
              <div class="col-5">
                <div class="mb-3">
                  <label for="firstName">No. Ext</label>
                  <input type="text" class="form-control" id="input_eu_nolext" placeholder="" value="" required="">
                  <div class="invalid-feedback">No Ext Unico.</div>
                </div>              
              </div>
              <!-- -->

              <!-- -->            
              <div class="col-5 offset-1">
                <div class="mb-3">
                    <label for="firstName">Grs a/f</label>
                    <input type="text" class="form-control" id="input_eu_grsaf" placeholder="" value="" required="">
                    <div class="invalid-feedback">Grs a/f Unico.</div>
                  </div>
                  <div class="mb-3">
                    <label for="firstName">Grs</label>
                    <input type="text" class="form-control" id="input_eu_grs" placeholder="" value="" required="">
                    <div class="invalid-feedback">Grs Unico.</div>
                  </div>                
                  <div class="mb-3">
                    <label for="firstName">Ley</label>
                    <input type="text" class="form-control" id="input_eu_ley" placeholder="" value="" required="">
                    <div class="invalid-feedback">Ley Unico.</div>
                  </div>              
              </div>
              <div class="col-5">
                <div class="mb-3">
                    <label for="firstName">Fino</label>
                    <input type="text" class="form-control" id="input_eu_fino" placeholder="" value="" required="" disabled data-toggle="tooltip" data-placement="top" title="barra*ley/24">
                    <div class="invalid-feedback">Fino Unico.</div>
                </div>              
              </div>
              <!-- -->        

          </div>

          <!-- cierres -->
          <div class="row bg-white">
              <div class="col-12" ><h5 class="text-capitalize">cierres</h5></div>
              
              <div class="col-5 offset-1">
              <div class="mb-3">
                  <label for="firstName">Precio</label>
                  <input type="text" class="form-control" id="input_eu_precio" placeholder="" value="" required="">
                  <div class="invalid-feedback">Precio Unico.</div>
                </div>

                  <div class="mb-3">
                    <label for="firstName">Fino/Pza</label>
                    <input type="text" class="form-control" id="input_eu_finopza" placeholder="" value="" required="">
                    <div class="invalid-feedback">Fino/Pza Unico.</div>
                  </div>
                
              </div>

              <div class="col-5">

                  <div class="mb-3">
                    <label for="firstName">importe</label>
                    <input type="text" class="form-control" id="input_eu_importe" placeholder="" value="" required="" disabled data-toggle="tooltip" data-placement="top" title="precio * Fino/Pza">
                    <div class="invalid-feedback">Importe Unico.</div>
                  </div>
  
              </div>

          </div>

          <!-- pagos -->
          <div class="row bg-white">
              <div class="col-12" ><h5 class="text-capitalize">pagos</h5></div>
              <div class="col-5 offset-1">

                <div class="mb-3">
                  <label for="firstName">pagos</label>
                  <input type="text" class="form-control" id="input_eu_pagos" placeholder="" value="0" required="">
                  <div class="invalid-feedback">Pago Unico.</div>
                </div>



              </div>

              <div class="col-5">
                <div class="mb-3">
                  <label for="firstName">total</label>
                  <input type="text" class="form-control" id="input_eu_total" placeholder="" value="" required="" disabled  data-toggle="tooltip" data-placement="top" title=" = importe">
                  <div class="invalid-feedback">Total Unico.</div>
                </div>

                  <div class="mb-3">
                    <label for="firstName">saldo</label>
                    <input type="text" class="form-control" id="input_eu_saldo" placeholder="" value="" required="" disabled data-toggle="tooltip" data-placement="top" title="saldo actual + total - pago">
                    <div class="invalid-feedback">Saldo Unico.</div>
                  </div>
        
              </div>

          </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Entrega</button>
          <button type="button" class="btn btn-primary" id="btnGenerarEntregaUnica">Generar Entrega</button>
        </div>
      </div>
    </div>
  </div>
<!-- CREATE -->