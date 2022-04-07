<?php
include_once "conexion.php";
$con=mysqli_connect($host, $usuario, $contrasenia, $base_de_datos); 
$query="SELECT ECO_23, NUC_23, FECHA_23, HECHO_23, VICTIMA_U_OFENDIDO_23, IMPUTADO_23, LUGAR_23, CARPETAS_REMITIDAS_23, MP_23 from year_23 where id_23=".$_GET['id_23']."; ";
$res=mysqli_query($con, $query);
$year_23=mysqli_fetch_assoc($res);
if($year_23){

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
<th colspan="9">Carpeta del año 2023</th>
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
                    <th>M.P. Asignado para 2023.</th>
                </tr>
            </thead>
            <tbody background="fondo.png">
                
                    <tr>
                        <td><?php echo $year_23["ECO_23"] ?></td>
                        <td><?php echo $year_23["NUC_23"] ?></td>
                        <td><?php echo $year_23["FECHA_23"] ?></td>
                        <td><?php echo $year_23["HECHO_23"] ?></td>
                        <td><?php echo $year_23["VICTIMA_U_OFENDIDO_23"] ?></td>
                        <td><?php echo $year_23["IMPUTADO_23"] ?></td>
                        <td><?php echo $year_23["LUGAR_23"] ?></td>
                        <td><?php echo $year_23["CARPETAS_REMITIDAS_23"] ?></td>
                        <td><?php echo $year_23["MP_23"] ?></td>
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


