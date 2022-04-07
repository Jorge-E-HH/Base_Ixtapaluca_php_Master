<?php
include_once "conexion.php";
$con=mysqli_connect($host, $usuario, $contrasenia, $base_de_datos); 
$query="SELECT ECO_22, NUC_22, FECHA_22, HECHO_22, VICTIMA_U_OFENDIDO_22, IMPUTADO_22, LUGAR_22, CARPETAS_REMITIDAS_22, MP_22 from year_22 where id_22=".$_GET['id_22']."; ";
$res=mysqli_query($con, $query);
$year_22=mysqli_fetch_assoc($res);
if($year_22){

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
<th colspan="9">Carpeta del año 2022</th>
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
                    <th>M.P. Asignado para 2022</th>
                </tr>
            </thead>
            <tbody background="fondo.png">
                
                    <tr>
                        <td><?php echo $year_22["ECO_22"] ?></td>
                        <td><?php echo $year_22["NUC_22"] ?></td>
                        <td><?php echo $year_22["FECHA_22"] ?></td>
                        <td><?php echo $year_22["HECHO_22"] ?></td>
                        <td><?php echo $year_22["VICTIMA_U_OFENDIDO_22"] ?></td>
                        <td><?php echo $year_22["IMPUTADO_22"] ?></td>
                        <td><?php echo $year_22["LUGAR_22"] ?></td>
                        <td><?php echo $year_22["CARPETAS_REMITIDAS_22"] ?></td>
                        <td><?php echo $year_22["MP_22"] ?></td>
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


