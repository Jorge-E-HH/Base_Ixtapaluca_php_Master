<?php
 include "encabezado.php" ?>
<div class="row">
    <div class="col-10">
        <h1>Registro para el año 2023.</h1>
        <form action="guardar_2023.php" method="POST">

        <div class="form-group">
                <label for="ECO_23">Numero Economico Asignado.</label>
                <input name="ECO_23" required type="text" id_23="ECO_23" class="form-control" placeholder="ECO asignado.">
            </div>
        <div class="form-group">
                <label for="NUC_23">NUC.</label>
                <input name="NUC_23" required type="text" id_23="NUC_23" class="form-control" placeholder="NUC Asignado.">
            </div>
            <div class="form-group">
                <label for="FECHA_23">FECHA INICIO.</label>
                <input name="FECHA_23" required type="text" id_23="FECHA_23" class="form-control" placeholder="FECHA Asignada.">
            </div>
            <div class="form-group">
                <label for="HECHO_23">HECHO.</label>
                <input name="HECHO_23" required type="text" id_23="HECHO_23" class="form-control" placeholder="Ingrese HECHO">
            </div>            
            <div class="form-group">
                <label for="VICTIMA_U_OFENDIDO_23">VICTIMA U OFENDIDO.</label>
                <input name="VICTIMA_U_OFENDIDO_23" required type="text" id_23="VICTIMA_U_OFENDIDO_23" class="form-control" placeholder="Ingrese VICTIMA U OFENDIDO">
            </div>
            <div class="form-group">
                <label for="IMPUTADO_23">IMPUTADO.</label>
                <input name="IMPUTADO_23" required type="text" id_23="IMPUTADO_23" class="form-control" placeholder="Ingrese IMPUTADO">
            </div>
            <div class="form-group">
                <label for="LUGAR_23">LUGAR DE HECHO.</label>
                <input name="LUGAR_23" required type="text" id_23="LUGAR_23" class="form-control" placeholder="Ingrese LUGAR del hecho.">
            </div>
            <div class="form-group">
                <label for="CARPETAS_REMITIDAS_23">CARPETAS REMITIDAS.</label>
                <input name="CARPETAS_REMITIDAS_23" required type="text" id_23="CARPETAS_REMITIDAS_23" class="form-control" placeholder="CARPETAS REMITIDAS Si/No/Lugar de remisión.">
            </div>
            <div class="form-group">
                <label for="MP_23">M.P asignado.</label>
                <input name="MP_23" required type="text" id_23="MP_23" class="form-control" placeholder="MP Asignado.">
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
<?php include "pie.php" ?>