<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <!-- Boton para ocultar el menu lateral -->
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <!-- Imagen y nombre de cliente -->
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['nombre_cliente'] . " " . $_SESSION['apellidos']?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="perfil.php"> Perfil</a></li>
            <li><a href="../actions/logout.php"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
