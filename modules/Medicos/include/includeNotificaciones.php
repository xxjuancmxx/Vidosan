<?php include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoTareas.php"; ?>
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i style="color:#d5223e"><?php if(contarTareasSinEmpezar($_COOKIE['id'])>0) echo contarTareasSinEmpezar($_COOKIE['id']);?></i> <i class="fa fa-envelope"></i><b class="caret"></b></a>
  <ul class="dropdown-menu message-dropdown">
    <?php
     $consul=listarTareasMedicosporId($_COOKIE['id']);
     $rowers=mysql_num_rows($consul);
     $coluwers=mysql_num_fields($consul);
    if($rowers>0){
      for($i=0;$i<contarTareasSinEmpezar($_COOKIE['id']);$i++){
          $arry =mysql_fetch_array($consul);
    ?>
      <li class="message-preview">
          <a href="#">
              <div class="media">
                  <span class="pull-left">
                      <img class="media-object" src="http://placehold.it/50x50" alt="">
                  </span>
                  <div class="media-body">
                      <h5 class="media-heading">
                          <strong>
                              <?php
                                  echo $_COOKIE['user'];
                              ?>
                          </strong>
                      </h5>
                      <p class="small text-muted"><i class="fa fa-clock-o"></i><?php echo $arry['fecha_inserccion']; ?></p>
                      <p><?php echo $arry['descripcion']; ?></p>
                  </div>
              </div>
          </a>
      </li>
      <?php
        }
       ?>
      <li class="message-preview alert-info">
          <a href="/Vidosan/modules/Medicos/Formularios/FormTareas/misTareas.php">Ver todas las tareas..</a>
      </li>
      <?php

    }else{
       ?>
       <li class="message-preview alert-info">
           <a href="#">No hay tareas</a>
       </li>
       <?php
     }
        ?>
  </ul>
