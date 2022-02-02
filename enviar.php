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

$nombre=$_POST["nombre1"];
$apellido=$_POST["apellido"];
$provincia=$_POST["provincia"];
$email=$_POST["email"];
$contra=$_POST["contrasenha"];








include("conexion.php");
$conn = mysqli_connect($servidor,$usuario,$contraseña,$Base) or die ("no se ha podido conectar a la base");
if(!$conn){

 die ("conexion fallida" . mysqli_connect_error());
}

$db=mysqli_select_db($conn, $Base)or die("ups");
$consulta = "INSERT INTO registro (nombre, apellido, provincia, email, contraseña) VALUES ('$nombre','$apellido','$provincia','$email','$contra')";
if (mysqli_query ($conn, $consulta)){
    echo "<p> Registro agregado </p>";
}else{
    echo "<p>No se agrego nuevo registro </p>";
    echo "error: ". $consulta . "<br>". mysqli_error($conn);
}
mysqli_close($conn);

?>
    <p><a href="index.html">Inicio</a> </p>
    
    
    </div>
</body>
</html>