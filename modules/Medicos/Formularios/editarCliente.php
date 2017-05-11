<?php
    require("../DaoMedico/DaoCliente.php");
    $num=$_POST['num_buscar'];
    $existe= existeCliente($num);
    if($existe){
        $consul=sacarCliente($num);
        $arryCl=mysql_fetch_array($consul);
        ?>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Modificar Paciente
            </li>
        </ol>
        <form action="insertarClientes.php" method="POST" class="form">
          <input type="hidden" value="<?php echo $arryCl['idCliente']; ?>" name="idCliente"/>
          <input type="hidden" value="<?php echo $arryCl['password']; ?>" name="passmodcli"/>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <label>Nombre</label>
                    <input type="text" name="nombmodcli" class="form-control" value="<?php echo $arryCl['nombre_cliente']; ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                     <label>Apellidos</label>
                     <input type="text" name="apellmodcli" class="form-control" value="<?php echo $arryCl['apellidos_cliente']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <label>Usuario</label>
                    <input type="text" name="usermodcli" class="form-control" value="<?php echo $arryCl['user_cliente']; ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                     <label>Contraseña</label>
                     <input type="password" name="contramodcli" class="form-control" value="<?php echo $arryCl['password']; ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <label>Telefono de contacto</label>
                    <input type="text" name="telefonomodcli" class="form-control" value="<?php echo $arryCl['telefono_cliente']; ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                     <label>Email</label>
                     <input type="text" name="mailmodcli" class="form-control" value="<?php echo $arryCl['email']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <label>Provincia</label>
                    <input type="text" name="provmodcli" class="form-control" value="<?php echo $arryCl['provincia']; ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                     <label>Municipio</label>
                     <input type="text" name="munmodcli" class="form-control" value="<?php echo $arryCl['municipio']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <br>
                    <input type="submit" name="modificarcli" class="btn btn-success">
                </div>
            </div>
        </form>
        <?php
          }else{
              ?>
        <p class="alert alert-warning">Este número de teléfono no corresponde con ningún cliente, prueba con otro número de teléfono</p>
        <?php
            }
        ?>
