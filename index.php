<?php
    <?php
   
   $nombreServidor = "localhost";
   $baseDatos = "cooperativa_chocas";
   $nombreUsuario = "usuario";
   $password = "usuario";
   
   // Se crea la conexión
   
   $conn = new mysqli($nombreServidor, $nombreUsuario, $password, $baseDatos);
   
   // Se comprueba que la conexión es correcta
   
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }
    
    mysqli_close($conn);
?>