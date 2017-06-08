<?php
    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoMedico.php";
    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/EntidadMedico/categoria.php";
    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoCategoria.php";
    header("Content-type: text/html; charset=utf8");
    $num=$_POST['num_buscar'];
    $existe= existeMedico($num);
    if($existe){
        $consul=sacarMedico($num);
        $arryCl=mysql_fetch_array($consul);
        ?>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Modificar Medico
            </li>
        </ol>
        <form action="editarMedicos.php" method="POST" class="form">
          <input type="hidden" value="<?php echo $arryCl['id_medico']; ?>" name="idMedico"/>
          <input type="hidden" value="<?php echo $arryCl['password']; ?>" name="passmodmed"/>
          <input type="hidden" value="<?php echo $arryCl['idCategoria']; ?>" name="catmed"/>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <label>Nombre</label>
                    <input type="text" name="nombmodmed" class="form-control" value="<?php echo $arryCl['nombre_medico']; ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                     <label>Apellidos</label>
                     <input type="text" name="apellmodmed" class="form-control" value="<?php echo $arryCl['apellidos_medico']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <label>Usuario</label>
                    <input type="text" name="usermodmed" class="form-control" value="<?php echo $arryCl['user_medico']; ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                     <label>Contraseña</label>
                     <input type="password" name="contramodmed" class="form-control" value="<?php echo $arryCl['password']; ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <label>Telefono de contacto</label>
                    <input type="text" name="telefonomodmed" class="form-control" maxlength="9" value="<?php echo $arryCl['telefono_medico']; ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                     <label>Email</label>
                     <input type="text" name="mailmodmed" class="form-control" value="<?php echo $arryCl['email']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <label>Provincia</label>
                    <input type="text" name="provmodmed" class="form-control" value="<?php echo $arryCl['provincia']; ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                     <label>Municipio</label>
                     <input type="text" name="munmodmed" class="form-control" value="<?php echo $arryCl['municipio']; ?>">
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12 col-md-12 col-xs-12">
                     <label>Categoria</label>
                     <select name="catmed" class="form-control">
                       <?php
                       $consulcat=listarCategoria();
                       $rows_cat=mysql_num_rows(listarCategoria());
                       for($i=0;$i<$rows_cat;$i++){
                          $arrycat = mysql_fetch_array($consulcat);
                          if($arryCl['idCategoria']==$arrycat['id_categoria']){
                            echo "<option selected style='color:red' value=".$arrycat['id_categoria'].">".$arrycat['tipo']."</option>";
                          }else{
                            echo "<option value=".$arrycat['id_categoria'].">".$arrycat['tipo']."</option>";
                          }
                        }
                       ?>
                     </select><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <br>
                    <input type="submit" name="modificarmed" class="btn btn-success" onclick="msg()">
                </div>
            </div>
        </form>

        <?php
          }else{
              ?>
        <p class="alert alert-warning">Este número de teléfono no corresponde con ningún medico, prueba con otro número de teléfono</p>
        <?php
            }
        ?>
