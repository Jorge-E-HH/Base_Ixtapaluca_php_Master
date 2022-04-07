<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Inicio</title>
<meta name="Description" content="Sencilla página.">
<meta name="viewport" content="initial-scale=1.0, user-scalable=yes">
<meta name="Robots" content="index, follow"> 
<link href="style/estilo.css" rel="stylesheet" type="text/css" media="screen">
</head> 
<STYLE>
BODY { background: url(fondo.png) center fixed no-repeat}
</STYLE>
<div id="inicio"></div>
<div id="header">
<img src="img/misitio.jpg" width="700" height="920" alt="Inicio" title="Inicio">
<div id="page">
<div id="migaspan">
<a href="index.php">Inicio</a> » 
<a href="inicio.php">Pagina principal</a> 
</div>
<h1>Bienvenido al asistente de registro.</h1>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
<a href="https://twitter.com" style="margin:3px;" class="twitter-share-button" data-via="" data-lang="es">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><br>
<br>
<center>
<img style="margin:30px 0 50px 0;" src="Fisca.jpg" width="900" height="360"  alt="Imagen para el articulo" title="Primer artículo"><br>
</center>
<br>Sencilla página, realizada para el area...<br>
<br>
<h1>Misión.</h1><br>
<br>
<h1>Visión.</h1><br>
<br>
<h1>Objetivo.</h1><br>
<br>
<br>
<br>
<?php
include "encabezado.php";    
    include "pie.php";   
?> 
</div></div>
</body> 
</html>    