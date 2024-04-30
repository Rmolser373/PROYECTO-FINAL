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


    $dattie = $_POST['dattie'];
    $Nsoc = $_POST['Nsoc'];
    $ace1 = $_POST['ace1'];
    $can1 = $_POST['can1'];
    $ace2 = $_POST['ace2'];
    $can2 = $_POST['can2'];
    $ace3 = $_POST['ace3'];
    $can3 = $_POST['can3'];
    $Nulo = "N";

  $VentasSQL = "INSERT INTO Ventas VALUES(NULL,'" .$Nsoc. "','" .$dattie. "')";
    if (!$conn->query($VentasSQL)) {
      echo "Falló la inserción de datos en la tabla: (" . $conn->errno . ") " . $conn->error;
    } else {
      echo "Se ha ejecutado correctamente la inserción de datos";
      echo $VentasSQL;
      $UltClave = $conn->insert_id;
    }

  $ProVen1SQL = "INSERT INTO Producto_Ventas VALUES(" .$UltClave. ",'" .$ace1. "','" .$can1. "')";
    if (!$conn->query($ProVen1SQL)) {
      echo "Falló la inserción de datos en la tabla: (" . $conn->errno . ") " . $conn->error;
    } else {
      echo "Se ha ejecutado correctamente la inserción de datos";
      echo $ProVen1SQL;
    }
  
  if ($can2>0 && $ace2!=$ace1 && $ace2!=$Nulo){
    $ProVen2SQL = "INSERT INTO Producto_Ventas VALUES(" .$UltClave. ",'" .$ace2. "','" .$can2. "')";
    if (!$conn->query($ProVen2SQL)) {
      echo "Falló la inserción de datos en la tabla: (" . $conn->errno . ") " . $conn->error;
    } else {
      echo "Se ha ejecutado correctamente la inserción de datos";
      echo $ProVen2SQL;
    }
  }
    
  if ($can3>0 && $ace3!=$ace1 && $ace3!=$ace2 && $ace3!=$Nulo){
    $ProVen3SQL = "INSERT INTO Producto_Ventas VALUES(" .$UltClave. ",'" .$ace3. "','" .$can3. "')";
    if (!$conn->query($ProVen3SQL)) {
      echo "Falló la inserción de datos en la tabla: (" . $conn->errno . ") " . $conn->error;
    } else {
      echo "Se ha ejecutado correctamente la inserción de datos";
      echo $ProVen3SQL;
    }
  } 
  
  mysqli_close($conn);
  
?>
