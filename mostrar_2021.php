<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "año_2021.php";

$yeaar_21 = year_21::obtener();
?>
    <link rel="stylesheet" href="css/cabecera.css">
<div class="row">
    <div class="col-12">
        <h1>Registro para el año 2021.</h1>
        <a href="formulario_registro_2021.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    
    <form action="buscador_2021.php" method="get">
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
      
                <?php foreach ($yeaar_21 as $year_21) { ?>

                    <tr>
                        <td><?php echo $year_21["ECO_21"] ?></td>
                        <td><?php echo $year_21["NUC_21"] ?></td>
                        <td><?php echo $year_21["FECHA_21"] ?></td>
                        <td><?php echo $year_21["HECHO_21"] ?></td>
                        <td><?php echo $year_21["VICTIMA_U_OFENDIDO_21"] ?></td>
                        <td><?php echo $year_21["IMPUTADO_21"] ?></td>
                        <td><?php echo $year_21["LUGAR_21"] ?></td>
                        <td><?php echo $year_21["CARPETAS_REMITIDAS_21"] ?></td>
                        <td><?php echo $year_21["MP_21"] ?></td>

                        <td>
                            <a href="print_pdf_2021.php?id_21=<?php echo $year_21["id_21"] ?>" class="btn btn-info">
                            PDF
                            </a>
                        </td>
                        <td>
                            <a href="editar_2021.php?id_21=<?php echo $year_21["id_21"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_2021.php?id_21=<?php echo $year_21["id_21"] ?>" class="btn btn-danger">
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
