<?php
 include "encabezado.php" ?>
<div class="row">
    <div class="col-10">
        <h1>Registro para el año 2022</h1>
        <form action="guardar_2022.php" method="POST">

        <div class="form-group">
                <label for="ECO_22">Numero Economico.</label>
                <input name="ECO_22" required type="text" id_22="ECO_22" class="form-control" placeholder="ECO Asignado.">
            </div>
        <div class="form-group">
                <label for="NUC_22">NUC.</label>
                <input name="NUC_22" required type="text" id_22="NUC_22" class="form-control" placeholder="NUC Asignado.">
            </div>
            <div class="form-group">
                <label for="FECHA_22">FECHA INICIO.</label>
                <input name="FECHA_22" required type="text" id_22="FECHA_22" class="form-control" placeholder="FECHA Asignada.">
            </div>
            <div class="form-group">
                <label for="HECHO_22">HECHO.</label>
                <input name="HECHO_22" required type="text" id_22="HECHO_22" class="form-control" placeholder="Ingrese HECHO">
            </div>            
            <div class="form-group">
                <label for="VICTIMA_U_OFENDIDO_22">VICTIMA U OFENDIDO.</label>
                <input name="VICTIMA_U_OFENDIDO_22" required type="text" id_22="VICTIMA_U_OFENDIDO_22" class="form-control" placeholder=" Ingese VICTIMA U OFENDIDO">
            </div>
            <div class="form-group">
                <label for="IMPUTADO_22">IMPUTADO.</label>
                <input name="IMPUTADO_22" required type="text" id_22="IMPUTADO_22" class="form-control" placeholder="Ingrese IMPUTADO">
            </div>
            <div class="form-group">
                <label for="LUGAR_22">LUGAR DE HECHO</label>
                <input name="LUGAR_22" required type="text" id_22="LUGAR_22" class="form-control" placeholder="Ingrse LUGAR del hecho.">
            </div>
            <div class="form-group">
                <label for="CARPETAS_REMITIDAS_22">CARPETAS REMITIDAS.</label>
                <input name="CARPETAS_REMITIDAS_22" required type="text" id_22="CARPETAS_REMITIDAS_22" class="form-control" placeholder="CARPETAS REMITIDAS Si/No/Lugar de remisión.">
            </div>
            <div class="form-group">
                <label for="MP_22">M.P asignado.</label>
                <input name="MP_22" required type="text" id_22="MP_22" class="form-control" placeholder="MP Asignado.">
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