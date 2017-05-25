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
        <!-- Icono de mensaje -->
        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
            <span class="badge bg-green">6</span>
          </a>
          <!-- Menu desplegable con una preview de los mensajes -->
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <!-- boton para ver todos los mensajes completos -->
              <div class="text-center">
                <a>
                  <strong>Ver todos los mensajes</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
