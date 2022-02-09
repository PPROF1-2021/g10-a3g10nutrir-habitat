<?php
$servidor = "localhost";
$usuario = "martinesteban";
$contraseña="Martin2022@@";
$Base="id18429556_rns_basededatos";


// Create connection
$conn = new mysqli($servidor, $usuario, $contraseña,$Base);
mysqli_query($conn, "SET character_set_result-utf8");

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  }
echo "Connected successfully";
?>