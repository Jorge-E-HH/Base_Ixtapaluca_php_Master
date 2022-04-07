<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "año_2020.php";

$yeaar_20 = year_20::obtener();
?>
<link rel="stylesheet" href="css/cabecera.css">
<div class="row">
    <div class="col-12">
        <h1>Registro para el año 2020.</h1>
        <a href="formulario_registro_2020.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    
<form action="buscador_2020.php" method="get">
<input type="text" name="busqueda"><br>
<input type="submit" name="enviar" value="Buscar"> 
</form>
<br>
<br>
<br>    

<div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                
                <tr>
                    <th>ECO</th>
                    <th>NUC</th>
                    <th>Fecha.</th>
                    <th>Hecho.</th>
                    <th>Victima u Ofendido.</th>
                    <th>Imputado.</th>
                    <th>Lugar del hecho.</th>
                    <th>Carpetas Remitidas: </th>
                    <th>M.P. asignado.</th>
                    <th>Generar: </th>
                    <th>Editar.</th>
                    <th>Eliminar.</th>
                </tr>
            </thead>
            
            <tbody background="fondo.png">
      
                <?php foreach ($yeaar_20 as $year_20) { ?>

                    <tr>
                        <td><?php echo $year_20["ECO_20"] ?></td>
                        <td><?php echo $year_20["NUC_20"] ?></td>
                        <td><?php echo $year_20["FECHA_20"] ?></td>
                        <td><?php echo $year_20["HECHO_20"] ?></td>
                        <td><?php echo $year_20["VICTIMA_U_OFENDIDO_20"] ?></td>
                        <td><?php echo $year_20["IMPUTADO_20"] ?></td>
                        <td><?php echo $year_20["LUGAR_20"] ?></td>
                        <td><?php echo $year_20["CARPETAS_REMITIDAS_20"] ?></td>
                        <td><?php echo $year_20["MP_20"] ?></td>

                        <td>
                            <a href="print_pdf_2020.php?id_20=<?php echo $year_20["id_20"] ?>" class="btn btn-info">
                            PDF
                            </a>
                        </td>
                        <td>
                            <a href="editar_2020.php?id_20=<?php echo $year_20["id_20"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_2020.php?id_20=<?php echo $year_20["id_20"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    <?php
/*Creado por Mr.caosone*/ 
?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include_once "pie.php";
