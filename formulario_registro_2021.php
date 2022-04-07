<?php
 include "encabezado.php" ?>
<div class="row">
    <div class="col-10">
        <h1>Registro para el año 2021</h1>
        <form action="guardar_2021.php" method="POST">

        <div class="form-group">
                <label for="ECO_21">Numero Economico.</label>
                <input name="ECO_21" required type="text" id_21="ECO_21" class="form-control" placeholder="Eco Asignado">
            </div>
        <div class="form-group">
                <label for="NUC_21">NUC.</label>
                <input name="NUC_21" required type="text" id_21="NUC_21" class="form-control" placeholder="NUC Asignado">
            </div>
            <div class="form-group">
                <label for="FECHA_21">FECHA INICIO.</label>
                <input name="FECHA_21" required type="text" id_21="FECHA_21" class="form-control" placeholder="FECHA Asignada">
            </div>
            <div class="form-group">
                <label for="HECHO_21">HECHO.</label>
                <input name="HECHO_21" required type="text" id_21="HECHO_21" class="form-control" placeholder="Ingrese HECHO">
            </div>            
            <div class="form-group">
                <label for="VICTIMA_U_OFENDIDO_21">VICTIMA U OFENDIDO.</label>
                <input name="VICTIMA_U_OFENDIDO_21" required type="text" id_21="VICTIMA_U_OFENDIDO_21" class="form-control" placeholder="Ingrese VICTIMA U OFENDIDO">
            </div>
            <div class="form-group">
                <label for="IMPUTADO_21">IMPUTADO.</label>
                <input name="IMPUTADO_21" required type="text" id_21="IMPUTADO_21" class="form-control" placeholder="Ingrese IMPUTADO">
            </div>
            <div class="form-group">
                <label for="LUGAR_21">LUGAR DE HECHO.</label>
                <input name="LUGAR_21" required type="text" id_21="LUGAR_21" class="form-control" placeholder="Ingrese LUGAR del hecho.">
            </div>
            <div class="form-group">
                <label for="CARPETAS_REMITIDAS_21">CARPETAS REMITIDAS.</label>
                <input name="CARPETAS_REMITIDAS_21" required type="text" id_21="CARPETAS_REMITIDAS_21" class="form-control" placeholder="CARPETAS REMITIDAS Si/No/Lugar de remisión">
            </div>
            <div class="form-group">
                <label for="MP_21">M.P asignado.</label>
                <input name="MP_21" required type="text" id_21="MP_21" class="form-control" placeholder="MP Asignado">
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