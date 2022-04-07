<?php
include_once "conexion.php";
include_once "año_2022.php";
include_once "encabezado.php";
$yeaar_22 = year_22::obtenerUno($_GET["id_22"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Carpeta del Año 2022..</h1>
        <form action="actualizar_2022.php" method="POST">
            <input type="hidden" name="id_22" value="<?php echo $_GET["id_22"] ?>">

            <div class="form-group">
                <label for="ECO_22">Numero economico.</label>
                <input value="<?php echo $yeaar_22->ECO_22 ?>" name="ECO_22" required type="text" id_22="ECO_22" class="form-control" placeholder="ECO_22">
            </div>

            <div class="form-group">
                <label for="NUC_22">NUC.</label>
                <input value="<?php echo $yeaar_22->NUC_22 ?>" name="NUC_22" required type="text" id_22="NUC_22" class="form-control" placeholder="NUC_22">
            </div>

            <div class="form-group">
                <label for="FECHA_22">FECHA INICIO.</label>
                <input value="<?php echo $yeaar_22->FECHA_22 ?>" name="FECHA_22" required type="text" id_22="FECHA_22" class="form-control" placeholder="FECHA_22">
            </div>

            <div class="form-group">
                <label for="HECHO_22"> HECHO.</label>
                <input value="<?php echo $yeaar_22->HECHO_22 ?>" name="HECHO_22" required type="text" id_22="HECHO_22" class="form-control" placeholder="HECHO_22">
            </div>

            <div class="form-group">
                <label for="VICTIMA_U_OFENDIDO_22">VICTIMA U OFENDIDO.</label>
                <input value="<?php echo $yeaar_22->VICTIMA_U_OFENDIDO_22 ?>" name="VICTIMA_U_OFENDIDO_22" required type="text" id_22="VICTIMA_U_OFENDIDO_22" class="form-control" placeholder="VICTIMA_U_OFENDIDO_22">
            </div>

            <div class="form-group">
                <label for="IMPUTADO_22">IMPUTADO.</label>
                <input value="<?php echo $yeaar_22->IMPUTADO_22 ?>" name="IMPUTADO_22" required type="text" id_22="IMPUTADO_22" class="form-control" placeholder="IMPUTADO_22">
            </div>

            <div class="form-group">
                <label for="LUGAR_22">LUGAR.</label>
                <input value="<?php echo $yeaar_22->LUGAR_22 ?>" name="LUGAR_22" required type="text" id_22="LUGAR_22" class="form-control" placeholder="LUGAR_22">
            </div>

            <div class="form-group">
                <label for="CARPETAS_REMITIDAS_22">CARPETAS REMITIDAS.</label>
                <input value="<?php echo $yeaar_22->CARPETAS_REMITIDAS_22 ?>" name="CARPETAS_REMITIDAS_22" required type="text" id_22="CARPETAS_REMITIDAS_22" class="form-control" placeholder="CARPETAS_REMITIDAS_22">
            </div>

            <div class="form-group">
                <label for="MP_22">M.P Asignado.</label>
                <input value="<?php echo $yeaar_22->MP_22 ?>" name="MP_22" required type="text" id_22="MP_22" class="form-control" placeholder="MP_22">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
                <br>
                <br>
                <br>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>