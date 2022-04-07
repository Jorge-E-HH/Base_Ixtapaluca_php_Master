<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "año_2022.php";

$yeaar_22 = year_22::obtener();
?>
    <link rel="stylesheet" href="css/cabecera.css">
<div class="row">
    <div class="col-12">
        <h1>Registro para el año 2022.</h1>
        <a href="formulario_registro_2022.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    
    <form action="buscador_2022.php" method="get">
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
      
                <?php foreach ($yeaar_22 as $year_22) { ?>

                    <tr>
                        <td><?php echo $year_22["ECO_22"] ?></td>
                        <td><?php echo $year_22["NUC_22"] ?></td>
                        <td><?php echo $year_22["FECHA_22"] ?></td>
                        <td><?php echo $year_22["HECHO_22"] ?></td>
                        <td><?php echo $year_22["VICTIMA_U_OFENDIDO_22"] ?></td>
                        <td><?php echo $year_22["IMPUTADO_22"] ?></td>
                        <td><?php echo $year_22["LUGAR_22"] ?></td>
                        <td><?php echo $year_22["CARPETAS_REMITIDAS_22"] ?></td>
                        <td><?php echo $year_22["MP_22"] ?></td>

                        <td>
                            <a href="print_pdf_2022.php?id_22=<?php echo $year_22["id_22"] ?>" class="btn btn-info">
                            PDF
                            </a>
                        </td>
                        <td>
                            <a href="editar_2022.php?id_22=<?php echo $year_22["id_22"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_2022.php?id_22=<?php echo $year_22["id_22"] ?>" class="btn btn-danger">
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
