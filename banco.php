<?php
 require("vista/cabecera.php");
 ?>
 <body class="banc">
  
<div class="usuario">
  <h2>BANCO</h2>
  <form action="RegisBanco.php" method="post">
    <div class="form-group">
       <label for="Nombre" class="text-primary "style="color:Tomato;">Nombre:</label>
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
    <button type="submit" class="btn btn-light" style=" background-color:#a72833; color:white;" >Registrar</button>
  </form>
</div>

</body>
<?php require("vista/pie.php");
 ?>