<?php
 require("vista/cabecera.php");
 ?>

<body class="banc">
  

 <br>
 <button type="button" class="btn btn" data-toggle="modal" data-target="#myModal" i class="fa-solid fa-file-circle-plus" style=" background-color:#a72833; color:white;" ></i >registrar</button>
 <?php
  $conexion = mysqli_connect("bwsnuoyf8gs8ksyrd9h3-mysql.services.clever-cloud.com", "uzyix51oxo4bxoep", "NnoXgGmKvWSD4MmIvGK8", "bwsnuoyf8gs8ksyrd9h3") or
  die("Problemas con la conexión");


  $registros = mysqli_query($conexion, "select * from banco") or
    die("Problemas en el select:" . mysqli_error($conexion));  ?>
    <table class="table table-striped display" id="tabla1">
    <thead>
      <tr>
      <th>id</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>tipoident</th>
        <th>Numero de Identificacion</th>
        <th>telefono</th>
        <th>direccion</th>
        <th>email</th>
        <th>accion</th>
        

        
      </tr>
    </thead>
    <tbody>
    <tr> 
      <?php
  while ($reg = mysqli_fetch_array($registros)) {?> 
   
   <td><?php echo $reg['id']; ?></td> 
    <td><?php echo  $reg['nombre']; ?></td>
    <td><?php echo $reg['apellido'] ; ?></td>
  
    
    <td><?php 
    switch ($reg['tipoident']) {
      case 1:
        echo "Cédula de Ciudadanía";
        break;
      case 2:
        echo "Tarjeta de identidad";
        break;
      case 3:
        echo "Cédula de extrajenría";
        break;
        case 4:
          echo "Pasaporte";
         break;
    }?></td>
    <td><?php echo $reg['numid'] ; ?></td>
    <td><?php echo $reg['telefono'] ; ?></td>
    <td><?php echo $reg['direccion'] ; ?></td>
    <td><?php echo $reg['email'] ; ?></td>
    <td><button type="submit" class="btn btn-success"><a href="editar.php?id=<?php  echo $reg['id'] ?>">editar </a></button></td>
    <td><button type="submit" class="btn btn" style=" background-color:#a72833; color:white;"  ><a href="borrar.php?id=<?php  echo $reg['id'] ?>">Eliminar </a></button></td>
  </tr>
 
    <?php  }  ?> 
     </tbody>
     </table>
     <script>
     $(document).ready( function () {
        $('#tabla1').DataTable();
    } );
    </script>
  
  <!--MODAL INICIA-->
    <div class="container">
  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">REGISTRO BANCO</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="usuario">
  <h2>BANCO</h2>
  <form action="RegisBanco.php" method="post">
    <div class="form-group">
       <label for="Nombre" class="text-primary">Nombre:</label>
      <input type="text" class="form-control" id="" placeholder="Digite su nombre" name="nombre">
    </div>
    <div class="form-group">
    <label for="Apellido" class="text-primary">Apellidos:</label>

    <input type="text" class="form-c/ontrol" id="" placeholder="Digite sus apellidos" name="apellido">
    </div>
    <div>
    <label for="Nombre" class="text-primary">Tipo de identificacion:</label>
    <select name="tipoident" id="">
        <option value="1">Cédula de Ciudadanía</option>
        <option value="2">Tarjeta de identidad</option>
        <option value="3">Cédula de extrajenría </option>
        <option value="4">Pasaporte</option>
      
    </select>
    </div>
    <div class="form-group">
        <label for="num" class="text-primary">Numero de Identificacion</label>
        <input type="number" class="form-control" id="" placeholder="ingrese su numero de identificacion" name="numid">
    </div>
    <div class="form-group">
        <label for="tel" class="text-primary">Teléfono</label>
        <input type="number" class="form-control" id="" placeholder="ingrese su numero de telefono" name="telefono">
    </div>
    <div class="form-group">
      <label for="email" class="text-primary">Direccion</label>
      <input type="text" class="form-control" id="" placeholder="indique su direccion" name="direccion">
    </div>
    <div class="form-group">
        <label for="tel" class="text-primary">Email</label>
        <input type="Email" class="form-control" id="" placeholder="ingrese su correo electronico" name="email">
    </div>
    <button type="submit" class="btn btn-success" >Registrar</button>
  </form>
</div> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</body>