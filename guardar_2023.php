<?php
include_once "conexion.php";
include_once "año_2023.php";
$year_23 = new year_23($_POST["ECO_23"], $_POST["NUC_23"], $_POST["FECHA_23"], $_POST["HECHO_23"], $_POST["VICTIMA_U_OFENDIDO_23"], $_POST["IMPUTADO_23"], $_POST["LUGAR_23"], $_POST["CARPETAS_REMITIDAS_23"], $_POST["MP_23"]);
$year_23->guardar();
header("Location: mostrar_2023.php");




