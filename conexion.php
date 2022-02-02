<?php
$servidor = "localhost:3310";
$usuario = "root";
$contraseña="";
$Base="basemartin";


// Create connection
$conn = new mysqli($servidor, $usuario, $contraseña,$Base);
mysqli_query($conn, "SET character_set_result-utf8");

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  }
echo "Connected successfully";
?>