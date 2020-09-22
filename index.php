<html>
  <head>
      <title>Ejemplo - Proyecto 01</title>
      <link href="estilos.css" rel="stylesheet">
  </head>
  <?php
      $nombre = "";
      $mensaje = "";
      if($_POST){
        $nombre = $_POST["nombre"];
        $mensaje = "<h2>Hola $nombre, bienvenido a PHP</h2>";
      }
  ?>
  <body>
      <form method="post" action="index.php">
        <label>Introducir Nombre: </label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <br>
        <input type="submit" value="Enviar Datos">
      </form>
      <?php
        echo $mensaje;
      ?>
  </body>
</html>
