<div class="col-10 offset-1 text-right py-3">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary p-1">Resumen</button>

<input type="hidden" id="iduserupdate">
</div>

<div class="col-10 offset-1 text-right py-3">
  <table class="table table-striped p-1">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Puesto</th>
      </tr>
    </thead>
    <tbody id="allUser" class="text-right"></tbody>
  </table>
</div>




<!-- Modal NEW -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Usuarios Nuevos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--
      /*
                'id_advance' => random_string('sha1', 20),
                'time'       => date("Y-m-d H:m:s"),
                'user'       => $_POST['user'],
                'permissions'=> $_POST['permissions'],
                'email'      => $_POST['email'],
                'password'   => password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost']),
                'firstname'  => $_POST['first'],
                'secondname' => $_POST['second'],
                'telefono'   => $_POST['tel'],
                'puesto'     => $_POST['puesto']
                */
        -->
        <form>

          <div class="form-group">
          <label for="exampleInputUsuario">Usuario</label>
          <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="usuarioHelp">
          <small id="usuarioHelp" class="form-text text-muted">Usuario.</small>
          </div>

          <div class="form-group">
          <label for="exampleInputPermiso">Permiso</label>
          <select class="custom-select d-block w-100" required="" class="form-control" id="exampleInputPermiso" aria-describedby="permisoHelp">>
              <option value="">Choose...</option>
              <option value="administrador">administrador</option>
              <option value="vendedor">     vendedor</option>
            </select>          
          <small id="permisoHelp" class="form-text text-muted">Permiso.</small>
          </div>

          <div class="form-group">
          <label for="exampleInputEmail">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input type="email" class="form-control" id="exampleInputPassword" aria-describedby="passwordHelp">
          <small id="emailHelp" class="form-text text-muted">Password.</small>
          </div>

          <div class="form-group">
          <label for="exampleInputNombre">Nombre</label>
          <input type="text" class="form-control" id="exampleInputNombre" aria-describedby="nombreHelp">
          <small id="nombreHelp" class="form-text text-muted">Nombre.</small>
          </div>

          <div class="form-group">
          <label for="exampleInputApellido">Apellido</label>
          <input type="text" class="form-control" id="exampleInputApellido" aria-describedby="apellidoHelp">
          <small id="apellidoHelp" class="form-text text-muted">Apellido.</small>
          </div>

          <div class="form-group">
          <label for="exampleInputTelefono">Telefono</label>
          <input type="text" class="form-control" id="exampleInputTelefono" aria-describedby="telefonoHelp">
          <small id="telefonoHelp" class="form-text text-muted">Telefono.</small>
          </div>

          <div class="form-group">
          <label for="exampleInputPuesto">Puesto</label>
          <input type="text" class="form-control" id="exampleInputPuesto" aria-describedby="puestoHelp">
          <small id="puestoHelp" class="form-text text-muted">Puesto.</small>
          </div>

        </form>                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="b-nuew-user">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal UPDATE -->
<div class="modal fade " id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Usuarios Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

          <div class="form-group">
            <label for="exampleInputUsuario">Usuario</label>
            <input type="text" class="form-control" id="updateInputUsuario" aria-describedby="updateusuarioHelp">
            <small id="updateusuarioHelp" class="form-text text-muted">Usuario.</small>
          </div>

          <div class="form-group">
          <label for="updateInputPermiso">Permiso</label>
          <select class="custom-select d-block w-100" required="" class="form-control" id="updateInputPermiso" aria-describedby="permisoHelp">>
              <option value="">Choose...</option>
              <option value="administrador">administrador</option>
              <option value="vendedor">     vendedor</option>
            </select>          
          <small id="permisoHelp" class="form-text text-muted">Permiso.</small>
          </div>

          <div class="form-group">
          <label for="updateInputEmail">Email</label>
          <input type="email" class="form-control" id="updateInputEmail" aria-describedby="updateemailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
          <label for="InputPassword">Password</label>
          <input type="email" class="form-control" id="updateInputPassword" aria-describedby="updatepasswordHelp">
          <small id="updatepasswordHelp" class="form-text text-muted">Password.</small>
          </div>

          <div class="form-group">
          <label for="updateInputNombre">Nombre</label>
          <input type="text" class="form-control" id="updateInputNombre" aria-describedby="updatenombreHelp">
          <small id="updatenombreHelp" class="form-text text-muted">Nombre.</small>
          </div>

          <div class="form-group">
          <label for="updateInputApellido">Apellido</label>
          <input type="text" class="form-control" id="updateInputApellido" aria-describedby="updateapellidoHelp">
          <small id="updateapellidoHelp" class="form-text text-muted">Apellido.</small>
          </div>

          <div class="form-group">
          <label for="updateInputTelefono">Telefono</label>
          <input type="text" class="form-control" id="updateInputTelefono" aria-describedby="updatetelefonoHelp">
          <small id="updatetelefonoHelp" class="form-text text-muted">Telefono.</small>
          </div>

          <div class="form-group">
          <label for="updateInputPuesto">Puesto</label>
          <input type="text" class="form-control" id="updateInputPuesto" aria-describedby="updatepuestoHelp">
          <small id="updatepuestoHelp" class="form-text text-muted">Puesto.</small>
          </div>

        </form>                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  id="btnUpdateUser">Save changes</button>
      </div>
    </div>
  </div>
</div>