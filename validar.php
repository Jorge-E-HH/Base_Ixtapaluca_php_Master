<?php
include('db.php');
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","base_fiscalia");

$consulta="SELECT*FROM login where USUARIO='$usuario' and CONTRASENA='$contra'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:inicio.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR INTENTELO DE NUEVO</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
