<?php
$conexion = mysqli_connect("localhost","id22134720_root","Violeta0-","id22134720_joesgames");

/*if (mysqli_connect_errno()) {

    echo "ERROR no se conecto: " . mysqli_connect_errno();
} else {
    echo "Se conecto BBDD para Insertar Videojuego...";
}
*/
$id = 1;

//si existe el id, va a insertar los datos
 if (isset($id)) {

 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir datos del formulario
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $fabricante = $_POST['fabricante'];
        $plataforma = $_POST['plataforma'];
        $anio = $_POST['anio'];
        

  

    $insertarDatos = "INSERT INTO juegos(nombre,tipo,fabricante,plataforma,anio) values('$nombre','$tipo',' $fabricante','$plataforma','$anio')";

    mysqli_query($conexion, $insertarDatos);
    //echo"<br>";
    //echo "Nuevo videojuego registrado correctamente";
} else {
    //echo "Error: " . $insertarDatos . "<br>" . mysqli_error($conexion);
    
}
 }
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrar Juegos | Joe´s Games</title>
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
    rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body >
 
<section class="formu">
      <div class="titulosecc5">
        <br><br>
        <p>Nuevo videojuego registrado correctamente</p>
        <br><br><hr><br>
        <a href="consultadbbs.php">Volver al listado</a>
      </div>
    </section>
  
      
     
    

</body>

</html>