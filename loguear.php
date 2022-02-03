<?php
include('conexion.php');
$usuariologin=$_POST['usuario@'];
$contraseñalogin=$_POST['contraseña@'];
session_start();
$_SESSION['usuario@']=$usuariologin;


$conexion=mysqli_connect("localhost:3306","id17393219_martinesteban","M@r2002176378","id17393219_desarrolloweb");

$consulta="SELECT*FROM registro where email='$usuariologin' and contraseña='$contraseñalogin'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:sesion.php");

}else{
    ?>

    <?php
    include("login.html");
?>
  <h1 class= "bad"> ERROR DE AUTENTIFICACION </h1>
  
  <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>