<?php
include_once "conexion.php";
include_once "año_2020.php";
year_20::eliminar($_GET["id_20"]);
header("Location: mostrar_2020.php");
