      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Caja</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">

          <div class="btn-group mr-2">
          <!-- CRUD -->
            <button type="button" class="btn btn-sm btn-outline-secondary" id="btnNewEntradaSalida" data-toggle="modal" data-target="#saldoinicialModal" >Nuevo</button>
            <button type="button" class="btn btn-sm btn-outline-secondary" id="saldoinicial-create" data-toggle="modal" data-target="#saldoinicialModal"  style="display: none;">Saldo Inicial</button>
            <input  type="month"  class=""                                 id="start"               name="start" min="2020-01" value="<?php echo date("Y-m"); ?>">
            <button type="button" class="btn btn-sm btn-outline-secondary" id="reloadCaja"><span class="oi oi-reload"></span></button>
            

            
          </div>
          
        </div>

      </div>

      <div class="col-10 offset-1 text-right py-3">
      <button type="button" class="btn btn-primary" id="btnCancelar">Cancelar</button>
        <!-- Large modal -->
        <!-- 
        <button type="button" class="btn btn-primary" id="user-resume" data-toggle="modal" data-target=".bd-example-modal-lg" disabled>Resumen</button>
        <button type="button" class="btn btn-success d-none" id="ticket-print" data-toggle="modal" data-target=".bd-example-modal-lg">Ticket</button>
    -->
        
        <input type="hidden" id="saldoinicial" placeholder="Saldo Inicial"            value="" disabled>
        <input type="hidden" id="saldofinal"   placeholder="Saldo Final"              value="" disabled>
        <input type="hidden" id="ultimafecha"  placeholder="Ultima Fecha de Registro" value="" disabled>

      </div>      