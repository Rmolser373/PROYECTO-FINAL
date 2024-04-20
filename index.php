<?php
   
  $nombreServidor = "localhost";
  $baseDatos = "Ejemplo";
  $nombreUsuario = "usuarioEjemplo";
  $password = "usuarioEjemplo";
  
  // Se crea la conexión
   
  $conn = new mysqli($nombreServidor, $nombreUsuario, $password, $baseDatos);
   
  // Se comprueba que la conexión es correcta
   
  if (!$conn) {
    
    die("Connection failed: " . mysqli_connect_error());
  }
  
  echo "Conexión correcta";

  $sentenciaSQL="INSERT INTO Localidad VALUES(3,'Córdoba')";
 
  if (!$conn->query($sentenciaSQL)) {
      
    echo "Falló la inserción de datos en la tabla: (" . $conn->errno . ") " . $conn->error;
  
  }
    
  echo "Se ha ejecutado correctamente la inserción de datos";
  
  mysqli_close($conn);

?>