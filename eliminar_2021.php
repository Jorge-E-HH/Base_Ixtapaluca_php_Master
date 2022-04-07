<?php
include_once "conexion.php";
include_once "año_2021.php";
year_21::eliminar($_GET["id_21"]);
header("Location: mostrar_2021.php");
