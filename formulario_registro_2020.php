<?php
 include "encabezado.php" ?>
<div class="row">
    <div class="col-10">
        <h1>Registro para el año 2020</h1>
        <form action="guardar_2020.php" method="POST">

        <div class="form-group">
                <label for="ECO_20">Numero Economico.</label>
                <input name="ECO_20" required type="text" id_20="ECO_20" class="form-control" placeholder="ECO asignado">
            </div>
        <div class="form-group">
                <label for="NUC_20">NUC.</label>
                <input name="NUC_20" required type="text" id_20="NUC_20" class="form-control" placeholder="NUC asignado">
            </div>
            <div class="form-group">
                <label for="FECHA_20">FECHA INICIO.</label>
                <input name="FECHA_20" required type="text" id_20="FECHA_20" class="form-control" placeholder="FECHA asignada">
            </div>
            <div class="form-group">
                <label for="HECHO_20">HECHO.</label>
                <input name="HECHO_20" required type="text" id_20="HECHO_20" class="form-control" placeholder="Ingrese HECHO">
            </div>            
            <div class="form-group">
                <label for="VICTIMA_U_OFENDIDO_20">VICTIMA U OFENDIDO.</label>
                <input name="VICTIMA_U_OFENDIDO_20" required type="text" id_20="VICTIMA_U_OFENDIDO_20" class="form-control" placeholder="Ingrese VICTIMA U OFENDIDO">
            </div>
            <div class="form-group">
                <label for="IMPUTADO_20">IMPUTADO.</label>
                <input name="IMPUTADO_20" required type="text" id_20="IMPUTADO_20" class="form-control" placeholder="Ingrese IMPUTADO">
            </div>
            <div class="form-group">
                <label for="LUGAR_20">LUGAR DE HECHO.</label>
                <input name="LUGAR_20" required type="text" id_20="LUGAR_20" class="form-control" placeholder=" Ingrese LUGAR del hecho.">
            </div>
            <div class="form-group">
                <label for="CARPETAS_REMITIDAS_20">CARPETAS REMITIDAS.</label>
                <input name="CARPETAS_REMITIDAS_20" required type="text" id_20="CARPETAS_REMITIDAS_20" class="form-control" placeholder="CARPETAS REMITIDAS Si/No/Lugar de remisión">
            </div>
            <div class="form-group">
                <label for="MP_20">M.P Asignado.</label>
                <input name="MP_20" required type="text" id_20="MP_20" class="form-control" placeholder="MP Asignado">
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