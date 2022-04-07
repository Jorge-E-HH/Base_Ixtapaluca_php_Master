<?php
include_once "conexion.php";
include_once "año_2021.php";
include_once "encabezado.php";
$yeaar_21 = year_21::obtenerUno($_GET["id_21"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Carpeta del Año 2021..</h1>
        <form action="actualizar_2021.php" method="POST">
            <input type="hidden" name="id_21" value="<?php echo $_GET["id_21"] ?>">

            <div class="form-group">
                <label for="ECO_21">Numero economico.</label>
                <input value="<?php echo $yeaar_21->ECO_21 ?>" name="ECO_21" required type="text" id_21="ECO_21" class="form-control" placeholder="ECO_21">
            </div>

            <div class="form-group">
                <label for="NUC_21">NUC.</label>
                <input value="<?php echo $yeaar_21->NUC_21 ?>" name="NUC_21" required type="text" id_21="NUC_21" class="form-control" placeholder="NUC_21">
            </div>

            <div class="form-group">
                <label for="FECHA_21">FECHA INICIO.</label>
                <input value="<?php echo $yeaar_21->FECHA_21 ?>" name="FECHA_21" required type="text" id_21="FECHA_21" class="form-control" placeholder="FECHA_21">
            </div>

            <div class="form-group">
                <label for="HECHO_21"> HECHO.</label>
                <input value="<?php echo $yeaar_21->HECHO_21 ?>" name="HECHO_21" required type="text" id_21="HECHO_21" class="form-control" placeholder="HECHO_21">
            </div>

            <div class="form-group">
                <label for="VICTIMA_U_OFENDIDO_21">VICTIMA U OFENDIDO.</label>
                <input value="<?php echo $yeaar_21->VICTIMA_U_OFENDIDO_21 ?>" name="VICTIMA_U_OFENDIDO_21" required type="text" id_21="VICTIMA_U_OFENDIDO_21" class="form-control" placeholder="VICTIMA_U_OFENDIDO_21">
            </div>

            <div class="form-group">
                <label for="IMPUTADO_21">IMPUTADO.</label>
                <input value="<?php echo $yeaar_21->IMPUTADO_21 ?>" name="IMPUTADO_21" required type="text" id_21="IMPUTADO_21" class="form-control" placeholder="IMPUTADO_21">
            </div>

            <div class="form-group">
                <label for="LUGAR_21">LUGAR.</label>
                <input value="<?php echo $yeaar_21->LUGAR_21 ?>" name="LUGAR_21" required type="text" id_21="LUGAR_21" class="form-control" placeholder="LUGAR_21">
            </div>

            <div class="form-group">
                <label for="CARPETAS_REMITIDAS_21">CARPETAS REMITIDAS.</label>
                <input value="<?php echo $yeaar_21->CARPETAS_REMITIDAS_21 ?>" name="CARPETAS_REMITIDAS_21" required type="text" id_21="CARPETAS_REMITIDAS_21" class="form-control" placeholder="CARPETAS_REMITIDAS_21">
            </div>

            <div class="form-group">
                <label for="MP_21">M.P Asignado.</label>
                <input value="<?php echo $yeaar_21->MP_21 ?>" name="MP_21" required type="text" id_21="MP_21" class="form-control" placeholder="MP_21">
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