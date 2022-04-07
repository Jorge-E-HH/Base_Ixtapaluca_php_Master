<?php
include_once "conexion.php";
include_once "año_2023.php";
include_once "encabezado.php";
$yeaar_23 = year_23::obtenerUno($_GET["id_23"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Carpeta del Año 2023..</h1>
        <form action="actualizar_2023.php" method="POST">
            <input type="hidden" name="id_23" value="<?php echo $_GET["id_23"] ?>">

            <div class="form-group">
                <label for="ECO_23">Numero economico.</label>
                <input value="<?php echo $yeaar_23->ECO_23 ?>" name="ECO_23" required type="text" id_23="ECO_23" class="form-control" placeholder="ECO_23">
            </div>

            <div class="form-group">
                <label for="NUC_23">NUC.</label>
                <input value="<?php echo $yeaar_23->NUC_23 ?>" name="NUC_23" required type="text" id_23="NUC_23" class="form-control" placeholder="NUC_23">
            </div>

            <div class="form-group">
                <label for="FECHA_23">FECHA INICIO.</label>
                <input value="<?php echo $yeaar_23->FECHA_23 ?>" name="FECHA_23" required type="text" id_23="FECHA_23" class="form-control" placeholder="FECHA_23">
            </div>

            <div class="form-group">
                <label for="HECHO_23"> HECHO.</label>
                <input value="<?php echo $yeaar_23->HECHO_23 ?>" name="HECHO_23" required type="text" id_23="HECHO_23" class="form-control" placeholder="HECHO_23">
            </div>

            <div class="form-group">
                <label for="VICTIMA_U_OFENDIDO_23">VICTIMA U OFENDIDO.</label>
                <input value="<?php echo $yeaar_23->VICTIMA_U_OFENDIDO_23 ?>" name="VICTIMA_U_OFENDIDO_23" required type="text" id_23="VICTIMA_U_OFENDIDO_23" class="form-control" placeholder="VICTIMA_U_OFENDIDO_23">
            </div>

            <div class="form-group">
                <label for="IMPUTADO_23">IMPUTADO.</label>
                <input value="<?php echo $yeaar_23->IMPUTADO_23 ?>" name="IMPUTADO_23" required type="text" id_23="IMPUTADO_23" class="form-control" placeholder="IMPUTADO_23">
            </div>

            <div class="form-group">
                <label for="LUGAR_23">LUGAR.</label>
                <input value="<?php echo $yeaar_23->LUGAR_23 ?>" name="LUGAR_23" required type="text" id_23="LUGAR_23" class="form-control" placeholder="LUGAR_23">
            </div>

            <div class="form-group">
                <label for="CARPETAS_REMITIDAS_23">CARPETAS REMITIDAS.</label>
                <input value="<?php echo $yeaar_23->CARPETAS_REMITIDAS_23 ?>" name="CARPETAS_REMITIDAS_23" required type="text" id_23="CARPETAS_REMITIDAS_23" class="form-control" placeholder="CARPETAS_REMITIDAS_23">
            </div>

            <div class="form-group">
                <label for="MP_23">M.P Asignado.</label>
                <input value="<?php echo $yeaar_23->MP_23 ?>" name="MP_23" required type="text" id_23="MP_23" class="form-control" placeholder="MP_23">
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