<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  media="screen" href="css/estilo.css">
    <title>Registar</title>
</head>
<body>

    <div class="otrofondo">
   
   <?php

include("conexion.php");
if ($conn) {
    echo "Todo correcto, estas conectado a la base de datos";
     
 }else{
     echo "Ocurrio un error, no pudimos conectarnos a la base de datos <hr>";

}
$nombre=$_POST["nombre1"];
$apellido=$_POST["apellido"];
$provincia=$_POST["provincia"];
$email=$_POST["email"];
$contra=$_POST["contrasenha"];


$consulta = "INSERT INTO registro(nombre, apellido, provincia, email, contraseña) VALUES ('$nombre','$apellido','$provincia','$email','$contra')";
if (mysqli_query ($conn, $consulta)){
    echo "Registro agregado";
}else{
    echo "No se agrego nuevo registro";
    
}
mysqli_close($conn);

?>
    <p><a href="index.html">Inicio</a> </p>
    
    
    </div>
</body>
</html>