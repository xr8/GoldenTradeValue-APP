<div id="sMesalert" class="alert alert-warning" role="alert"  style="display: none;"><span class="text-primary font-weight-bold">Golden Trade Value</span> – Hasta el momento no existe un <span class="text-danger font-weight-normal text-uppercase">saldo inicial</span> para este mes.</div>
<div id="rMesalert" class="alert alert-warning" role="alert"  style="display: none;"><span class="text-primary font-weight-bold">Golden Trade Value</span> – Hasta el momento no existe    <span class="text-danger font-weight-normal text-uppercase">registro en la caja</span> para este mes..</div>


<!-- Modal NEW -->
<div id="rMestabla" class="table-responsive" style="display: none;">
  <table class="table table-hover p-1 ">
    <thead class="thead-dark">
        <tr>
          <th scope="col text-capitalize">#</th>
          <th scope="col text-capitalize">Nombre</th>
          <th scope="col text-capitalize">Fecha</th>
          
          <th scope="col text-capitalize">Tipo</th>


          <th scope="col text-capitalize">Entrada</th>
          <th scope="col text-capitalize">Salida</th>
          <th scope="col text-capitalize">Saldo</th>
          
          <th scope="col text-capitalize">No compra</th>
          <th scope="col text-capitalize">Concepto</th>
        </tr>
    </thead>
      <tbody id="allCaja" class="text-right ">
      <tr>
      <th scope="row"> 
        demo 0
      </th>
      <td>             
        demo
      </td>
    </tr>

      </tbody>
  </table>
</div>


<div class="container bg-light mt-5 d-none" id="Ticket">
  <div class="row">
    <div class="col-4">

      <div class="row">

        <div class="col-12">            <p>################################################</p></div>
        <div class="col-12 text-center"><p>GOLDEN TRADE VALUE</p></div>
        <div class="col-12 text-center">Fecha de la transaccion        <span id="fechaTran">0000-00-00 00:00</span></div>
        <div class="col-12">            <p>************************************************</p></div>

        <div class="col-6 text-left">Fecha : </div>  <div class="col-6 text-right" id="ticketFecha"   > 0000-00-00</div>
        <div class="col-6 text-left">Nombre: </div>  <div class="col-6 text-right" id="ticketNombre"  > GoldenTradeValue</div>
        <div class="col-6 text-left">Concepto: </div><div class="col-6 text-right" id="ticketConcepto"> AEIOU</div>
        <div class="col-6 text-left">Tipo: </div><div class="col-6 text-right"     id="ticketTipo"    > AEIOU</div>
        <div class="col-6 text-left">Monto: </div>   <div class="col-6 text-right" id="ticketMonto"   > $000,000</div>
        
        <div class="col-12">            <p>************************************************</p></div>
        <div class="col-12 text-center"><p>Monedas y Billetes</p></div>
        
        <div class="col-4 text-center">$ 0.50</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketM50" >0</div>
        <div class="col-4 text-center">$ 1.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketM1"  >0</div>
        <div class="col-4 text-center">$ 2.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketM2"  >0</div>
        <div class="col-4 text-center">$ 5.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketM5"  >0</div>
        <div class="col-4 text-center">$ 10.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketM10">0</div>

        <div class="col-6 text-center">Sub Total Monedas </div><div class="col-6 text-center" id="ticketSubTotalMonedas"> $00.00</div>
        
        <div class="col-4 text-center">$ 20.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketB20"    >0</div>
        <div class="col-4 text-center">$ 50.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketB50"    >0</div>
        <div class="col-4 text-center">$ 100.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketB100"  >0</div>
        <div class="col-4 text-center">$ 200.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketB200"  >0</div>
        <div class="col-4 text-center">$ 500.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketB500"  >0</div>
        <div class="col-4 text-center">$ 1000.00</div><div class="col-4 text-center">X</div><div class="col-4 text-center" id="ticketB1000">0</div>
        
        <div class="col-6 text-center">Sub Total Billetes </div><div class="col-6 text-center" id="ticketSubTotalBilletes"> $00.00</div>
        <div class="col-6 text-center">Total </div><div class="col-6 text-center" id="ticketTotal"> $00.00</div>
        
        <div class="col-12">            <p>************************************************</p></div>
        <div class="col-12">            <p>################################################</p></div>
      </div>

    
    </div>
  </div>
</div>