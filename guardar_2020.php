<?php
include_once "conexion.php";
include_once "año_2020.php";
$year_20 = new year_20($_POST["ECO_20"], $_POST["NUC_20"], $_POST["FECHA_20"], $_POST["HECHO_20"], $_POST["VICTIMA_U_OFENDIDO_20"], $_POST["IMPUTADO_20"], $_POST["LUGAR_20"], $_POST["CARPETAS_REMITIDAS_20"], $_POST["MP_20"]);
$year_20->guardar();
header("Location: mostrar_2020.php");




