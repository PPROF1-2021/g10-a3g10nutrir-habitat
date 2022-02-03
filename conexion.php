<?php
$servidor = "localhost";
$usuario = "id17393219_martinesteban";
$contraseña="M@r2002176378";
$Base="id17393219_desarrolloweb";


// Create connection
$conn = new mysqli($servidor, $usuario, $contraseña,$Base);
mysqli_query($conn, "SET character_set_result-utf8");

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  }
echo "Connected successfully";
?>