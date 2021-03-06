<?php include "header.php"?>
    <!-- Contenido de la pagina -->
    <div class="container">
      <div class="row">
      <h4 class="teal-text text-darken-3">Registrarse</h4>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input  id="first_name" type="text" class="validate">
              <label for="first_name">Nombre</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Apellido</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="disabled" type="text" class="validate">
              <label for="username">Nombre de usuario</label>
            </div>
            <div class="input-field col s6">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
            <div class="input-field col s6">
              <input id="password" type="password" class="validate">
              <label for="password">Confirmar password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col l6 s12">
              <select>
                <option value="" disabled selected>Elegi tu provincia</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Provincia</label>
            </div>
            <div class="input-field col l6 s12 ">
              <select>
                <option value="" disabled selected>Elegi tu ciudad</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Ciudad</label>
            </div>
          </div>
          <div class="row">
            <div class="col s6">
              <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Registrarse
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
    <!-- fin contenido -->
    <!-- Footer -->
<?php include "footer.php"?>   