<?php
include_once "conexion.php";
include_once "año_2022.php";
year_22::eliminar($_GET["id_22"]);
header("Location: mostrar_2022.php");
