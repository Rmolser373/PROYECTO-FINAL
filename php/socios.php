<?php
   
  $nombreServidor = "localhost";
  $baseDatos = "basechocas";
  $nombreUsuario = "usuario";
  $password = "usuario";
  
  // Se crea la conexión
   
  $conn = new mysqli($nombreServidor, $nombreUsuario, $password, $baseDatos);
   
  // Se comprueba que la conexión es correcta

  if (!$conn) {
    
    die("Connection failed: " . mysqli_connect_error());
  }
  
  echo "Conexión correcta";

    $nif = $_POST['nif'];
    $nombre = $_POST['nombre'];
    $Apellido1 = $_POST['Apellido1'];
    $Apellido2 = $_POST['Apellido2'];
    $tipodevia = $_POST['tipodevia'];
    $nombrecalle = $_POST['nombrecalle'];
    $numerovivienda = $_POST['numerovivienda'];
    $piso = $_POST['piso'];
    $codigopostal = $_POST['codigopostal'];
    $municipio = $_POST['municipio'];
    $provincia = $_POST['provincia'];
    $telefono = $_POST['telefono'];
    $mail = $_POST['mail'];

    $SociosSQL = "INSERT INTO Socios VALUES('" .$nif. "','" .$nombre. "','" .$Apellido1. "','" .$Apellido2.
     "','" .$tipodevia . $nombrecalle . $numerovivienda . $piso. "','" .$codigopostal. 
     "','".$municipio. "','" .$provincia. "','" .$telefono. "','" .$mail. "')";
    
    echo $SociosSQL;
 
  if (!$conn->query($SociosSQL)) {
      
    echo "Falló la inserción de datos en la tabla: (" . $conn->errno . ") " . $conn->error;
  
  }
    
  echo "Se ha ejecutado correctamente la inserción de datos";
  
  mysqli_close($conn);

?>