  
  <?php
  require 'conexion.php';
  
  
  mysqli_query($conexion, "insert into banco(nombre,apellido, tipoident, numid, telefono, direccion, email) values 
        ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[tipoident]',$_REQUEST[numid],$_REQUEST[telefono],'$_REQUEST[direccion]','$_REQUEST[email]')")
        or die("Problemas en el select" . mysqli_error($conexion));
      mysqli_close($conexion);
    
header("location: datos.php") ;
?>
