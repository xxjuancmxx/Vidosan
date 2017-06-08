<?php
  include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoCitas.php";
  $consul=listarCitasClienteporIdlimit($_COOKIE['id']);
  $rowers=mysql_num_rows($consul);
  if($rowers>0){
    for($i=0;$i<$rowers;$i++){
      $arry =mysql_fetch_array($consul);
      echo "<li><a style='text-align:center;'>".$arry['nombre_cliente']." <span class='label label-info'>".$arry['fecha_cita']."</a></li>";
    }
 ?>
  <li class="divider"></li>
  <li>
      <a href="/Vidosan/modules/Medicos/Formularios/FormCitas/misCitas.php">Ver todas las Citas</a>
  </li>
  <?php
}else{
   ?>
   <li>
       <div class="alert alert-warning">No tienes citas..</div>
   </li>
   <?php
 }
 ?>
