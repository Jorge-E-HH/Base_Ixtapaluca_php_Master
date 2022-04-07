<?php
include_once "conexion.php";
include_once "año_2023.php";
year_23::eliminar($_GET["id_23"]);
header("Location: mostrar_2023.php");
