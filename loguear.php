<?php

$usuariologin=$_POST['usuario@'];
$contraseñalogin=$_POST['contraseña@'];
session_start();
$_SESSION['usuario@']=$usuariologin;

//comprobamos si estamos conectados a la base de datos//
include('conexion.php');
if ($conn) {
  echo "Estas conectado a la base de datos";
   
}else{
   echo "Ocurrio un error, no pudimos conectarnos a la base de datos";

}
?>
<hr>
<?php

$consulta1="SELECT*FROM registro where email='$usuariologin' and contraseña='$contraseñalogin'";
//Comprobamos si se realizo la consulta correctamente//
if ($consulta1) {
  echo "Se realizo la consulta";
   
}else{
   echo "Ocurrio un error, no se realizo la operacion de consulta";

}

//creamos la variable 'resultado1' para tomar las dos variables para luego tomarles los datos.//
$resultado1=mysqli_query($conn,$consulta1);

$filas=mysqli_num_rows($resultado1);

if($filas){
  
    header("location:sesion.php");

}else{
    ?>

    <?php
    include("Login.html");
?>
  <h1 class= "bad"> ERROR DE AUTENTIFICACION </h1>
  
  <?php
}

mysqli_free_result($resultado1);
mysqli_close($conn);
?>