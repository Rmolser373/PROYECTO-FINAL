<?php
   
  $nombreServidor = "localhost";
  $baseDatos = "BaseChocas";
  $nombreUsuario = "usuario";
  $password = "usuario";
 
  // Se crea la conexión
   
  $conn = new mysqli($nombreServidor, $nombreUsuario, $password, $baseDatos);
   
  // Se comprueba que la conexión es correcta

  if (!$conn) {
   
    die("Connection failed: " . mysqli_connect_error());
  }
 
  echo "Conexión correcta";

    $datetime = $_POST['datetime'];
    $NIF_Socio = $_POST['NIF_Socio'];
    $cant_aceituna = $_POST['cant_aceituna'];
    $tipo_aceituna = $_POST['tipo_aceituna'];
    $parcela = $_POST['parcela'];
    $recinto = $_POST['recinto'];


    $EntregaSQL = "INSERT INTO Entrega_aceituna VALUES(NULL,'" .$datetime. "','" .$NIF_Socio. "','" .$cant_aceituna.
    "','" .$tipo_aceituna. "','" .$parcela. "','" .$recinto. "')";
   
    echo $EntregaSQL;
 
  if (!$conn->query($EntregaSQL)) {
     
    echo "Falló la inserción de datos en la tabla: (" . $conn->errno . ") " . $conn->error;
 
  } else {


    echo "Se ha ejecutado correctamente la inserción de datos";
 
  }
   
  mysqli_close($conn);

?>
