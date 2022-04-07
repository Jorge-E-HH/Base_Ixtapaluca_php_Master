<?php
include_once "conexion.php";
include_once "encabezado.php";
$con=mysqli_connect($host, $usuario, $contrasenia, $base_de_datos);
?>
<!DOCTYPE html>
<html>
    <head>
<title>Buscador</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
</head>
<body>
<h1>Seguir Buscando.</h1>
<form action="buscador_2022.php" method="get">
<input type="text" name="busqueda"><br>
<input type="submit" name="enviar" value="Buscar"> 
</form>
<br><br><br>

<?php
if(isset($_GET['enviar']))
{
$busqueda = $_GET['busqueda'];
$consulta = $con->query("SELECT * FROM year_22 WHERE ECO_22 LIKE '%$busqueda%'");
while ($row = $consulta->fetch_array()){
    echo $row['ECO_22'].'<br>';
}
}
include_once "pie.php";
?>

</body>
</html>
