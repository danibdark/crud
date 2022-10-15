<?php
 require("vista/cabecera.php");
 ?>
<?php
 require 'conexion.php';


  $registros = mysqli_query($conexion, "select id from banco
                        where id='$_GET[id]'") or die("Problemas en el select:" . mysqli_error($conexion));

    mysqli_query($conexion, "delete from banco where id='$_GET[id]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
      header("location: datos.php");
  
  mysqli_close($conexion);
  ?>