<?php
class year_22
{
 private $ECO_22, $NUC_22, $FECHA_22, $HECHO_22, $VICTIMA_U_OFENDIDO_22, $IMPUTADO_22, $LUGAR_22, $CARPETAS_REMITIDAS_22, $MP_22, $id_22;

    public function __construct($ECO_22, $NUC_22, $FECHA_22, $HECHO_22, $VICTIMA_U_OFENDIDO_22, $IMPUTADO_22, $LUGAR_22, $CARPETAS_REMITIDAS_22, $MP_22, $id_22 = null)
    {
        
        $this->ECO_22 = $ECO_22;
        $this->NUC_22 = $NUC_22;
        $this->FECHA_22 = $FECHA_22;
        $this->HECHO_22 = $HECHO_22;
        $this->VICTIMA_U_OFENDIDO_22 = $VICTIMA_U_OFENDIDO_22;
        $this->IMPUTADO_22 = $IMPUTADO_22;
        $this->LUGAR_22 = $LUGAR_22;
        $this->CARPETAS_REMITIDAS_22 = $CARPETAS_REMITIDAS_22;
        $this->MP_22 = $MP_22;

        if ($id_22) {
            $this->id_22 = $id_22;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO year_22
            (ECO_22, NUC_22, FECHA_22, HECHO_22, VICTIMA_U_OFENDIDO_22, IMPUTADO_22, LUGAR_22, CARPETAS_REMITIDAS_22, MP_22)
                VALUES
                (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("sssssssss", $this->ECO_22, $this->NUC_22, $this->FECHA_22, $this->HECHO_22, $this->VICTIMA_U_OFENDIDO_22, $this->IMPUTADO_22, $this->LUGAR_22, $this->CARPETAS_REMITIDAS_22, $this->MP_22);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id_22, ECO_22, NUC_22, FECHA_22, HECHO_22, VICTIMA_U_OFENDIDO_22, IMPUTADO_22, LUGAR_22, CARPETAS_REMITIDAS_22, MP_22 FROM year_22");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id_22)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id_22,  ECO_22, NUC_22, FECHA_22, HECHO_22, VICTIMA_U_OFENDIDO_22, IMPUTADO_22, LUGAR_22, CARPETAS_REMITIDAS_22, MP_22 FROM year_22 WHERE id_22 = ?");
        $sentencia->bind_param("i", $id_22);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update year_22 set ECO_22 = ?, NUC_22 = ?, FECHA_22 = ?, HECHO_22 = ?, VICTIMA_U_OFENDIDO_22 = ?, IMPUTADO_22 = ?, LUGAR_22 = ?, CARPETAS_REMITIDAS_22 = ?, MP_22 = ? where id_22 = ?");
        $sentencia->bind_param("sssssssssi", $this->ECO_22, $this->NUC_22, $this->FECHA_22, $this->HECHO_22, $this->VICTIMA_U_OFENDIDO_22, $this->IMPUTADO_22, $this->LUGAR_22, $this->CARPETAS_REMITIDAS_22, $this->MP_22, $this->id_22);
        $sentencia->execute();
    }

    public static function eliminar($id_22)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM year_22 WHERE id_22 = ?");
        $sentencia->bind_param("i", $id_22);
        $sentencia->execute();
    }
}
