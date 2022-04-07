<?php
include_once "conexion.php";
$con=mysqli_connect($host, $usuario, $contrasenia, $base_de_datos); 
$query="SELECT ECO_21, NUC_21, FECHA_21, HECHO_21, VICTIMA_U_OFENDIDO_21, IMPUTADO_21, LUGAR_21, CARPETAS_REMITIDAS_21, MP_21 from year_21 where id_21=".$_GET['id_21']."; ";
$res=mysqli_query($con, $query);
$year_21=mysqli_fetch_assoc($res);
if($year_21){

?>
<style>
table{
    width: 35%;
    border: 0.2px;
}
td,th{
    width: 23%;
    border: 0.2px solid #000;
}
thead{
    font-weight: bolt;
    text-align: center;
}
</style>
        <table cellspacing="0">
            <thead>
                <tr>
<th colspan="10">Carpeta del año 2021</th>
                 </tr>   
                <tr>
                    <th>ECO</th>
                    <th>NUC</th>
                    <th>Fecha.</th>
                    <th>Hecho delictuoso.</th>
                    <th>Victima u Ofendido.</th>
                    <th>Imputado.</th>
                    <th>Lugar del hecho.</th>
                    <th>Carpeta Remitida.</th>
                    <th>M.P. Asignado para 2021</th>
                </tr>
            </thead>
            <tbody background="fondo.png">
                
                    <tr>
                        <td><?php echo $year_21["ECO_21"] ?></td>
                        <td><?php echo $year_21["NUC_21"] ?></td>
                        <td><?php echo $year_21["FECHA_21"] ?></td>
                        <td><?php echo $year_21["HECHO_21"] ?></td>
                        <td><?php echo $year_21["VICTIMA_U_OFENDIDO_21"] ?></td>
                        <td><?php echo $year_21["IMPUTADO_21"] ?></td>
                        <td><?php echo $year_21["LUGAR_21"] ?></td>
                        <td><?php echo $year_21["CARPETAS_REMITIDAS_21"] ?></td>
                        <td><?php echo $year_21["MP_21"] ?></td>
                    </tr>
                    <?php
/*Creado por Mr.caosone*/ 
?>
                
            </tbody>
        </table>


<?php
}else{
    echo "No hay datos :c";
}

?>


