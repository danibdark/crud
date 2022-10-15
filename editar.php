
<?php require("vista/cabecera.php"); ?>
<?php

$conexion = mysqli_connect("bwsnuoyf8gs8ksyrd9h3-mysql.services.clever-cloud.com", "uzyix51oxo4bxoep", "NnoXgGmKvWSD4MmIvGK8", "bwsnuoyf8gs8ksyrd9h3") or
die("Problemas con la conexión");


  if (isset($_GET['id'])){
    $id= $_GET['id'];
    $query= "SELECT * FROM banco WHERE id = $id";
    $result = mysqli_query($conexion,$query);
    if(mysqli_num_rows($result)==1){
      $row= mysqli_fetch_array($result);
      $nombre=$row['nombre'];
      $apellido=$row['apellido'];
      $tipoident=$row['tipoident'];
      $numid=$row['numid'];
      $telefono=$row['telefono'];
      $direccion=$row['direccion'];
      $email=$row['email'];
    }
  }
  if(isset($_POST['update'])){
    $id= $_GET['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $tipoident=$_POST['tipoident'];
    $numid=$_POST['numid'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $email=$_POST['email'];
    $query="UPDATE banco SET nombre='$nombre',apellido='$apellido',tipoident=$tipoident,numid=$numid,telefono=$telefono,direccion='$direccion',email='$email'  where id = $id ";
    $result = mysqli_query($conexion,$query);
    header("location: datos.php");
  }
  ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="post">
          <div class=" form-group">
            Nuevo nombre<input type="text" name="nombre" id="" value="<?php echo $nombre; ?>"class="form-control" placeholder="Actualiza el nombre del local">
            Nuevo apellido<input type="text" name="apellido" id="" value="<?php echo $apellido; ?>"class="form-control" placeholder="Actualiza el tipo de local">
            Nuevo tipo id<input type="text" name="tipoident" id="" value="<?php echo $tipoident; ?>"class="form-control" placeholder="Actualiza la direccion">
            Nuevo num id<input type="number" name="numid" id="" value="<?php echo $numid; ?>"class="form-control" placeholder="Actualiza el codigo de camara y comercio">
            Nuevo telefono<input type="text" name="telefono" id="" value="<?php echo $telefono; ?>"class="form-control" placeholder="Actualiza el nombre del local">
            Nueva direccion<input type="text" name="direccion" id="" value="<?php echo $direccion; ?>"class="form-control" placeholder="Actualiza el tipo de local">
            Nuevo email<input type="text" name="email" id="" value="<?php echo $email; ?>"class="form-control" placeholder="Actualiza la direccion">
            
          </div>
          <button type="submit" class="btn btn-primary" name="update">Actualizar</button>
        </form>
      </div>
    </div>  
  </div>
</div>
