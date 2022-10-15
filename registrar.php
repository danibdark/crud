  
  <?php
  require 'conexion.php';
  
  mysqli_query($conexion, "INSERT INTO `banco`(`nombre`, `apellido`, `tipoident`, `numid`, `telefono`, `direccion`, `email`) VALUES ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[tipoident]',$_REQUEST[numid],$_REQUEST[telefono],'$_REQUEST[direccion]','$_REQUEST[email]')")
      mysqli_close($conexion);
    
header("location: datos.php") ;
?>
