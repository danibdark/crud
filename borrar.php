<?php
 require("vista/cabecera.php");
 ?>
<?php
  $conexion = mysqli_connect("bwsnuoyf8gs8ksyrd9h3-mysql.services.clever-cloud.com", "uzyix51oxo4bxoep", "NnoXgGmKvWSD4MmIvGK8", "bwsnuoyf8gs8ksyrd9h3") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select id from banco
                        where id='$_GET[id]'") or die("Problemas en el select:" . mysqli_error($conexion));

    mysqli_query($conexion, "delete from banco where id='$_GET[id]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
      header("location: datos.php");
  
  mysqli_close($conexion);
  ?>