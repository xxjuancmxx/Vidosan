
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title"><i class="fa fa-heartbeat"></i>
        <span>
          <?php echo $_SESSION['nombre_cliente'] . " " . $_SESSION['apellidos']; ?>
        </span>
      </a>
    </div>

    <div class="clearfix"></div>
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <a><h3>Menú</h3></a>
        <ul class="nav side-menu">
          <!-- Calendario -->
          <li>
            <a href="index.php">
              <i class="fa fa-calendar"></i>
              Calendario
            </a>
          </li>
          <!-- Perfil -->
          <li>
            <a href="perfil.php">
              <i class="fa fa-user"></i>
              Editar perfil
            </a>
          </li>
          <!-- Mensajes -->
          <li>
            <a href="expediente.php">
              <i class="fa fa-book"></i>
              Expediente
            </a>
          </li>
          <!-- Cita -->
          <li>
            <a href="cita.php">
              <i class="fa fa-user-md"></i>
              Pedir cita
            </a>
          </li>
          <!-- Página principal -->
          <li>
            <a href="../../../index.php">
              <i class="fa fa-desktop"></i>
              Ir a la página principal
            </a>
          </li>
          <!-- Desconectar -->
          <li>
            <a href="../actions/logout.php">
              <i class="fa fa-sign-out"></i>
              Desconexión
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <!-- Primer elemento -->
      <a href="perfil.php" data-toggle="tooltip" data-placement="top" title="Perfil">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <!-- Segundo elemento -->
      <a onclick="popUpInformacion()" ata-toggle="tooltip" data-placement="top" title="Información">
        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      </a>
      <!-- Tercer elemento -->
      <a onclick="popUpQuienesSomos()" data-toggle="tooltip" data-placement="top" title="Desarrollado por">
        <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
      </a>
      <!-- Cuarto elemento -->
      <a href="../actions/logout.php" data-toggle="tooltip" data-placement="top" title="Salir">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
