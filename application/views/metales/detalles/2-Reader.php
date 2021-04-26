<!-- Nav tabs -->
<div class="container">
    <div class="row">

        <div class="col-12">

            <ul class="nav  nav-pills nav-fill" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="cierres-tab" data-toggle="tab" href="#cierres" role="tab" aria-controls=cierres" aria-selected="true">Cierres</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="entregas-tab" data-toggle="tab" href="#entregas" role="tab" aria-controls="entregas" aria-selected="false">Entregas</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="cierres2-tab" data-toggle="tab" href="#cierres2" role="tab" aria-controls="cierres2" aria-selected="false">Cierres Dos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pagos-tab" data-toggle="tab" href="#pagos" role="tab" aria-controls="pagos" aria-selected="false">Pagos</a>
                </li>
            </ul>
        
            <!-- Tab panes -->
            <div class="tab-content mt-5">

                <!-- BEGIN: CIerres-->
                <div class="tab-pane active" id="cierres"    role="tabpanel" aria-labelledby="cierres-tab">
                    <h5>Cierres</h5>
                    <p class="lead">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Cierre</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Metal</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Peso Original</th>
                                    <th scope="col">Peso Actual</th>
                                </tr>
                            </thead>
                            <tbody id="loadingMetalesCierres"></tbody>
                        </table>
                    </div>
                </div>
                <!-- End: CIerres-->         

                <!-- BEGIN: Entregas-->
                <div class="tab-pane"        id="entregas"   role="tabpanel" aria-labelledby="entregas-tab">
                    
                    <h5>Entregas</h5>
                    <p class="lead">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Cierre</th>                                  
                                    <th scope="col">Fecha</th>
                                    <th scope="col">n° Vale</th>

                                    <th scope="col">No. Ext</th>
                                    <th scope="col">Grs A/F</th>
                                    <th scope="col">Barra</th>
                                    <th scope="col">Ley</th>
                                    <th scope="col">Fino</th> 
                                </tr>
                            </thead>
                            <tbody id="loadingMetalesEntregas"></tbody>
                        </table>
                    </div>
                </div>
                <!-- End: Entregas-->   

                <!-- BEGIN: Cierres2-->
                <div class="tab-pane" id="cierres2"    role="tabpanel" aria-labelledby="cierres2-tab">
                    <h5>Cierres Dos</h5>
                    <p class="lead">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Cierre</th>
                                    <th scope="col">Fecha</th>

                                    <th scope="col">Fino / Pza</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Importe</th>
                                </tr>
                            </thead>
                            <tbody id="loadingMetalesCierresdos"></tbody>
                        </table>
                    </div>
                </div>
                <!-- End: Cierres 2-->                        

                <!-- BEGIN: Cierres2-->
                <div class="tab-pane" id="pagos"    role="tabpanel" aria-labelledby="pagos-tab">
                    <h5>Cierres Dos</h5>
                    <p class="lead">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Cierre</th>sss
                                    <th scope="col">Fecha</th>

                                    <th scope="col">Total</th>
                                    <th scope="col">Pagos</th>
                                    <th scope="col">Saldo</th>
                                    <th scope="col">Observaciones</th>
                                </tr>
                            </thead>
                            <tbody id="loadingMetalesPagos"></tbody>
                        </table>
                    </div>
                </div>
                <!-- End: Cierres 2-->     


                <div class="col-2">
                    <ul class="list-group">
                        <li
                            class="list-group-item list-group-item-secondary">Status Cierre</li>
                        <li class="list-group-item list-group-item-primary">Nuevo</li>
                        <li class="list-group-item list-group-item-success">Activo</li>
                        <li class="list-group-item list-group-item-warning">Faltante</li>
                        <li class="list-group-item list-group-item-danger"> Cerrado</li>
                    </ul>
                </div>

            </div>

        </div>


    </div>
</div>