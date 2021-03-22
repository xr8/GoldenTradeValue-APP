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
                                    <th scope="col">Folio</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Grs</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Saldo</th>
                                </tr>
                            </thead>
                            <tbody id="loadingMetalesCierres"></tbody>
                        </table>
                    </div>

                    <div class="col-2">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-secondary">Status Cierre</li>
                            <li class="list-group-item list-group-item-primary">Nuevo</li>
                            <li class="list-group-item list-group-item-success">Activo</li>
                            <li class="list-group-item list-group-item-warning">Faltante</li>
                            <li class="list-group-item list-group-item-danger"> Cerrado</li>
                        </ul>
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
                                    <th scope="col">Folio</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">N. Vale</th>
                                    <th scope="col">N. Ext</th>
                                    <th scope="col">Grs A/F</th>
                                    <th scope="col">Barra</th>
                                    <th scope="col">Ley</th>
                                    <th scope="col">Fino</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr class="data_cierres data_xxx1">
                                    <td>000 0001</td>
                                    <td>2020-06-25 13:25</td>
                                    <td>0 </td>
                                    <td>0 </td>
                                    <td>0 </td>
                                    <td>0 grs</td>
                                    <td>0 Ley</td>
                                    <td>220 grs</td>
                                </tr>                      

                            </tbody>
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
                                    <th scope="col">Folio</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Fino / Pza</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Importe</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="data_cierres data_xxx1">
                                     
                                    <td>000 0001</td>
                                    <td>2020-06-25 13:25</td>
                                    <td>220 grs</td>
                                    <td>$1,238.80</td>
                                    <td>$272,536.00</td>
                                </tr>    
                                               
                                <tr class="data_cierres data_xxx2">
                                     
                                    <td>000 0002</td>
                                    <td>2020-06-29 14:25</td>
                                    <td>53.35 grs</td>
                                    <td>$1,255.00</td>
                                    <td>$66,954.25</td>
                                </tr>       
                                <tr class="data_cierres data_xxx2">
                                     
                                    <td>000 0002</td>
                                    <td>2020-06-29 14:25</td>
                                    <td>70.14 grs</td>
                                    <td>$1,255.00</td>
                                    <td>$88,025.70</td>
                                </tr>
                                <tr class="data_cierres data_xxx2">
                                     
                                    <td>000 0002</td>
                                    <td>2020-06-29 14:25</td>
                                    <td>26.51 grs</td>
                                    <td>$1,238.80</td>
                                    <td>$33,270.05</td>
                                </tr>       
                                
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>0.45 grs</td>
                                    <td>$1,317.20</td>
                                    <td>$592.74</td>
                                </tr>                
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>1.42 grs</td>
                                    <td>$1,317.20</td>
                                    <td>$1,870.42</td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>2.93 grs</td>
                                    <td>$1,317.20</td>
                                    <td>$3,859.40</td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>94.69 grs</td>
                                    <td>$1,317.20</td>
                                    <td>$124,725.67</td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>1.03 grs</td>
                                    <td>$1,317.20</td>
                                    <td>$1,356.72</td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>88.88 grs</td>
                                    <td>$1,317.20</td>
                                    <td>$117,072.74</td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>11.58 grs</td>
                                    <td>$1,317.20</td>
                                    <td>$15,253.18</td>
                                </tr> 

                            </tbody>
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
                                    <th scope="col">Folio</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Pagos</th>
                                    <th scope="col">Saldo</th>
                                    <th scope="col">Observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="data_cierres data_xxx1">
                                     
                                    <td>000 0001</td>
                                    <td>2020-06-25 13:25</td>
                                    <td>$272,536.00</td>
                                    <td></td>
                                    <td> $273,288.41</td>
                                    <td></td>
                                </tr>    
                                               
                                <tr class="data_cierres data_xxx2">
                                     
                                    <td>000 0002</td>
                                    <td>2020-06-29 14:25</td>
                                    <td>$66,954.25</td>
                                    <td></td>
                                    <td>$116,916.22</td>
                                    <td></td>
                                </tr>       
                                <tr class="data_cierres data_xxx2">
                                     
                                    <td>000 0002</td>
                                    <td>2020-06-29 14:25</td>
                                    <td>$88,025.70</td>
                                    <td></td>
                                    <td>$99,025.29</td>
                                    <td></td>
                                </tr>
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-06-29 14:25</td>
                                    <td>$33,270.05</td>
                                    <td></td>
                                    <td>$44,261.96</td>
                                    <td></td>
                                </tr>       
                                
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>$592.74</td>
                                    <td>$15,000.00</td>
                                    <td>$7,509.98</td>
                                    <td>ANTICIPO AJUSTE COPELACION</td>
                                </tr>                
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>$1,870.42</td>
                                    <td></td>
                                    <td>$2,464.84</td>
                                    <td></td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>$3,859.40</td>
                                    <td>$102,041.00</td>
                                    <td>$2,465.30</td>
                                    <td></td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td>$124,725.67</td>
                                    <td></td>
                                    <td>$47,190.97</td>
                                    <td></td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td> $1,356.72</td>
                                    <td> $44,720.00</td>
                                    <td> $3,827.69</td>
                                    <td>LIQUIDACION </td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td> $117,072.74</td>
                                    <td></td>
                                    <td> $120,900.42 </td>
                                    <td></td>
                                </tr> 
                                <tr class="data_cierres data_xxx3">
                                     
                                    <td>000 0003</td>
                                    <td>2020-07-19 15:25</td>
                                    <td> $15,253.18</td>
                                    <td></td>
                                    <td> $19,070.90 </td>
                                    <td></td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End: Cierres 2-->     
                
            </div>

        </div>


    </div>
</div>