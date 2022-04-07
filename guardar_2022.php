<?php
include_once "conexion.php";
include_once "año_2022.php";
$year_22 = new year_22($_POST["ECO_22"], $_POST["NUC_22"], $_POST["FECHA_22"], $_POST["HECHO_22"], $_POST["VICTIMA_U_OFENDIDO_22"], $_POST["IMPUTADO_22"], $_POST["LUGAR_22"], $_POST["CARPETAS_REMITIDAS_22"], $_POST["MP_22"]);
$year_22->guardar();
header("Location: mostrar_2022.php");




