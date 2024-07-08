<?php

$conexion = mysqli_connect("localhost","id22134720_root","Violeta0-","id22134720_joesgames");

/*if (mysqli_connect_errno()) {
   echo "ERROR NO SE CONECTÓ";
}else {
    echo "se conectó joya";
}
echo "<br> <hr>";*/
$consultas = mysqli_query($conexion,"select * from juegos");

/*var_dump($consultas);

$extraido= mysqli_fetch_array($consultas);
var_dump($extraido);*/

//echo "<br> <hr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Juegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
    rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<header>
    <nav>
      <div class="barrasup2"><img src="img/joesgame.jpg" alt="logo" width="75%" height="50%"> </div>
      <div class="barrasup">Por Tiempo Limitado</div>
      <div ><a href="index.html" class="btn_iniciar_sesion" id="iniciar_sesion">Inicio</a></div>
      <div ><a href="iniciosesion.html" class="btn_iniciar_sesion" id="iniciar_sesion" target="_blank">Iniciar Sesion</a></div>
      <div ><a href="filmsSW.html" class="btn_iniciar_sesion" id="iniciar_sesion" target="_blank">Info Films Star Wars</a></div>
      <div ><a href="consultadbbs.php" class="btn_iniciar_sesion" id="iniciar_sesion" target="_blank">Listado Juegos</a></div>
      <div ><a href="registrar.html" class="btn_iniciar_sesion" id="iniciar_sesion" target="_blank">Registrar Juegos</a></div>
    </nav>
  </header>
<table class="table table-dark table-striped">
    <tr><th>Nombre</th>
    <th>Tipo</th>
    <th>Fabricante</th>
    <th>Plataforma</th>
    <th>Año</th>
    <th>Acción</th>
    </tr>
<?php
while($extraido = mysqli_fetch_array($consultas)){
   echo "<tr>
    
    <td>",  $extraido['nombre'],  "</td>
    <td>",  $extraido['tipo'],"</td>
    <td>",  $extraido['fabricante'],  "</td>
    <td>",  $extraido['plataforma'],  "</td>
    <td>",  $extraido['anio'],  "</td>
    <td> <a href='eliminar.php?id=", $extraido['id_juego'], "'>Eliminar</a> </td>
    </tr>";
    /*echo $extraido['id_videojuego']," ", $extraido['nombre'], " " , $extraido['descripcion'], 
        $extraido['genero']," ", $extraido['consola'], " " , $extraido['anio'], " " , $extraido['estrellas'], " " , $extraido['empresa_id'],"<br>";
*/
}

?>
</table>
</body>
</html>