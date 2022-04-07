<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "año_2023.php";

$yeaar_23 = year_23::obtener();
?>
    <link rel="stylesheet" href="css/cabecera.css">
<div class="row">
    <div class="col-12">
        <h1>Registro para el año 2023.</h1>
        <a href="formulario_registro_2023.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    
    <form action="buscador_2023.php" method="get">
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
      
                <?php foreach ($yeaar_23 as $year_23) { ?>

                    <tr>
                        <td><?php echo $year_23["ECO_23"] ?></td>
                        <td><?php echo $year_23["NUC_23"] ?></td>
                        <td><?php echo $year_23["FECHA_23"] ?></td>
                        <td><?php echo $year_23["HECHO_23"] ?></td>
                        <td><?php echo $year_23["VICTIMA_U_OFENDIDO_23"] ?></td>
                        <td><?php echo $year_23["IMPUTADO_23"] ?></td>
                        <td><?php echo $year_23["LUGAR_23"] ?></td>
                        <td><?php echo $year_23["CARPETAS_REMITIDAS_23"] ?></td>
                        <td><?php echo $year_23["MP_23"] ?></td>

                        <td>
                            <a href="print_pdf_2023.php?id_23=<?php echo $year_23["id_23"] ?>" class="btn btn-info">
                            PDF
                            </a>
                        </td>
                        <td>
                            <a href="editar_2023.php?id_23=<?php echo $year_23["id_23"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_2023.php?id_23=<?php echo $year_23["id_23"] ?>" class="btn btn-danger">
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
