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

  $sentenciaSQL="INSERT INTO Socios VALUES('12345678V', 'José', 'Rodriguez', 'Fernández', 'Avenida de Madrid 16','23001','Jaén','Jaén','659623343','jrodfer@hotmail.com');
 
  if (!$conn->query($sentenciaSQL)) {
      
    echo "Falló la inserción de datos en la tabla: (" . $conn->errno . ") " . $conn->error;
  
  }
    
  echo "Se ha ejecutado correctamente la inserción de datos";
  
  mysqli_close($conn);

?>