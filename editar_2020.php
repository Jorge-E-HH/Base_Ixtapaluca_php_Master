<?php
include_once "conexion.php";
include_once "año_2020.php";
include_once "encabezado.php";
$yeaar_20 = year_20::obtenerUno($_GET["id_20"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Carpeta del Año 2020..</h1>
        <form action="actualizar_2020.php" method="POST">
            <input type="hidden" name="id_20" value="<?php echo $_GET["id_20"] ?>">

            <div class="form-group">
                <label for="ECO_20">Numero economico.</label>
                <input value="<?php echo $yeaar_20->ECO_20 ?>" name="ECO_20" required type="text" id_20="ECO_20" class="form-control" placeholder="ECO_20">
            </div>

            <div class="form-group">
                <label for="NUC_20">NUC.</label>
                <input value="<?php echo $yeaar_20->NUC_20 ?>" name="NUC_20" required type="text" id_20="NUC_20" class="form-control" placeholder="NUC_20">
            </div>

            <div class="form-group">
                <label for="FECHA_20">FECHA INICIO.</label>
                <input value="<?php echo $yeaar_20->FECHA_20 ?>" name="FECHA_20" required type="text" id_20="FECHA_20" class="form-control" placeholder="FECHA_20">
            </div>

            <div class="form-group">
                <label for="HECHO_20">HECHO.</label>
                <input value="<?php echo $yeaar_20->HECHO_20 ?>" name="HECHO_20" required type="text" id_20="HECHO_20" class="form-control" placeholder="HECHO_20">
            </div>

            <div class="form-group">
                <label for="VICTIMA_U_OFENDIDO_20">VICTIMA U OFENDIDO.</label>
                <input value="<?php echo $yeaar_20->VICTIMA_U_OFENDIDO_20 ?>" name="VICTIMA_U_OFENDIDO_20" required type="text" id_20="VICTIMA_U_OFENDIDO_20" class="form-control" placeholder="VICTIMA_U_OFENDIDO_20">
            </div>

            <div class="form-group">
                <label for="IMPUTADO_20">IMPUTADO.</label>
                <input value="<?php echo $yeaar_20->IMPUTADO_20 ?>" name="IMPUTADO_20" required type="text" id_20="IMPUTADO_20" class="form-control" placeholder="IMPUTADO_20">
            </div>

            <div class="form-group">
                <label for="LUGAR_20">LUGAR.</label>
                <input value="<?php echo $yeaar_20->LUGAR_20 ?>" name="LUGAR_20" required type="text" id_20="LUGAR_20" class="form-control" placeholder="LUGAR_20">
            </div>

            <div class="form-group">
                <label for="CARPETAS_REMITIDAS_20">CARPETAS REMITIDAS.</label>
                <input value="<?php echo $yeaar_20->CARPETAS_REMITIDAS_20 ?>" name="CARPETAS_REMITIDAS_20" required type="text" id_20="CARPETAS_REMITIDAS_20" class="form-control" placeholder="CARPETAS_REMITIDAS_20">
            </div>

            <div class="form-group">
                <label for="MP_20">M.P Asignado.</label>
                <input value="<?php echo $yeaar_20->MP_20 ?>" name="MP_20" required type="text" id_20="MP_20" class="form-control" placeholder="MP_20">
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