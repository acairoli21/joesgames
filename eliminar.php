<?php
$conexion = mysqli_connect("localhost","id22134720_root","Violeta0-","id22134720_joesgames");

/*if (mysqli_connect_errno()) {
   echo "ERROR NO SE CONECTÓ";
}else {
    echo "se conectó joya";
}
echo "<br> <hr>";

var_dump($_GET);*/

$id = $_GET['id'];

$eliminar = mysqli_query($conexion,"DELETE FROM juegos WHERE id_juego='$id'");
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
        <p>El Registro fué Eliminado</p>
        <br><br><hr><br>
        <a href="consultadbbs.php">Volver al listado</a>
      </div>
    </section>
  
      
     
    

</body>

</html>