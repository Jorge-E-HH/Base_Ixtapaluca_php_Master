<?php
include_once "conexion.php";
include_once "año_2021.php";
$yeaar_21 = new year_21($_POST["ECO_21"], $_POST["NUC_21"], $_POST["FECHA_21"], $_POST["HECHO_21"], $_POST["VICTIMA_U_OFENDIDO_21"], $_POST["IMPUTADO_21"], $_POST["LUGAR_21"], $_POST["CARPETAS_REMITIDAS_21"], $_POST["MP_21"],  $_POST["id_21"]);
$yeaar_21->actualizar();
header("Location: mostrar_2021.php");


