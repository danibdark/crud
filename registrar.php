  
  <?php
  require 'conexion.php';
  
  mysqli_query($conexion, "INSERT INTO `banco`(`nombre`, `apellido`, `tipoident`, `numid`, `telefono`, `direccion`, `email`) VALUES ('[nombre]','[apellido]','[tipoident]','[numid]','[telefono]','[direccion]','[email]')")
      mysqli_close($conexion);
    
header("location: datos.php") ;
?>
