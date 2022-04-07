<?php
include_once "conexion.php";
$con=mysqli_connect($host, $usuario, $contrasenia, $base_de_datos); 
$query="SELECT ECO_20, NUC_20, FECHA_20, HECHO_20, VICTIMA_U_OFENDIDO_20, IMPUTADO_20, LUGAR_20, CARPETAS_REMITIDAS_20, MP_20 from year_20 where id_20=".$_GET['id_20']."; ";
$res=mysqli_query($con, $query);
$year_20=mysqli_fetch_assoc($res);
if($year_20){

?>
<style>
table{
    width: 40%;
    border: 0.5px;
}
td,th{
    width: 20%;
    border: 0.5px solid #000;
}
thead{
    font-weight: bolt;
    text-align: center;
}
</style>
        <table cellspacing="0">
            <thead>
                <tr>
<th colspan="9">Carpeta del año 2020</th>
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
                    <th>M.P. Asignado para 2020</th>
                </tr>
            </thead>
            <tbody background="fondo.png">
                
                    <tr>
                        <td><?php echo $year_20["ECO_20"] ?></td>
                        <td><?php echo $year_20["NUC_20"] ?></td>
                        <td><?php echo $year_20["FECHA_20"] ?></td>
                        <td><?php echo $year_20["HECHO_20"] ?></td>
                        <td><?php echo $year_20["VICTIMA_U_OFENDIDO_20"] ?></td>
                        <td><?php echo $year_20["IMPUTADO_20"] ?></td>
                        <td><?php echo $year_20["LUGAR_20"] ?></td>
                        <td><?php echo $year_20["CARPETAS_REMITIDAS_20"] ?></td>
                        <td><?php echo $year_20["MP_20"] ?></td>
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


