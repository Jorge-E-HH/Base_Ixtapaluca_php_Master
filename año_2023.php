<?php
class year_23
{
 private $ECO_23, $NUC_23, $FECHA_23, $HECHO_23, $VICTIMA_U_OFENDIDO_23, $IMPUTADO_23, $LUGAR_23, $CARPETAS_REMITIDAS_23, $MP_23, $id_23;

    public function __construct($ECO_23, $NUC_23, $FECHA_23, $HECHO_23, $VICTIMA_U_OFENDIDO_23, $IMPUTADO_23, $LUGAR_23, $CARPETAS_REMITIDAS_23, $MP_23, $id_23 = null)
    {
        
        $this->ECO_23 = $ECO_23;
        $this->NUC_23 = $NUC_23;
        $this->FECHA_23 = $FECHA_23;
        $this->HECHO_23 = $HECHO_23;
        $this->VICTIMA_U_OFENDIDO_23 = $VICTIMA_U_OFENDIDO_23;
        $this->IMPUTADO_23 = $IMPUTADO_23;
        $this->LUGAR_23 = $LUGAR_23;
        $this->CARPETAS_REMITIDAS_23 = $CARPETAS_REMITIDAS_23;
        $this->MP_23 = $MP_23;

        if ($id_23) {
            $this->id_23 = $id_23;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO year_23
            (ECO_23, NUC_23, FECHA_23, HECHO_23, VICTIMA_U_OFENDIDO_23, IMPUTADO_23, LUGAR_23, CARPETAS_REMITIDAS_23, MP_23)
                VALUES
                (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("sssssssss", $this->ECO_23, $this->NUC_23, $this->FECHA_23, $this->HECHO_23, $this->VICTIMA_U_OFENDIDO_23, $this->IMPUTADO_23, $this->LUGAR_23, $this->CARPETAS_REMITIDAS_23, $this->MP_23);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id_23, ECO_23, NUC_23, FECHA_23, HECHO_23, VICTIMA_U_OFENDIDO_23, IMPUTADO_23, LUGAR_23, CARPETAS_REMITIDAS_23, MP_23 FROM year_23");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id_23)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id_23,  ECO_23, NUC_23, FECHA_23, HECHO_23, VICTIMA_U_OFENDIDO_23, IMPUTADO_23, LUGAR_23, CARPETAS_REMITIDAS_23, MP_23 FROM year_23 WHERE id_23 = ?");
        $sentencia->bind_param("i", $id_23);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update year_23 set ECO_23 = ?, NUC_23 = ?, FECHA_23 = ?, HECHO_23 = ?, VICTIMA_U_OFENDIDO_23 = ?, IMPUTADO_23 = ?, LUGAR_23 = ?, CARPETAS_REMITIDAS_23 = ?, MP_23 = ? where id_23 = ?");
        $sentencia->bind_param("sssssssssi", $this->ECO_23, $this->NUC_23, $this->FECHA_23, $this->HECHO_23, $this->VICTIMA_U_OFENDIDO_23, $this->IMPUTADO_23, $this->LUGAR_23, $this->CARPETAS_REMITIDAS_23, $this->MP_23, $this->id_23);
        $sentencia->execute();
    }

    public static function eliminar($id_23)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM year_23 WHERE id_23 = ?");
        $sentencia->bind_param("i", $id_23);
        $sentencia->execute();
    }
}
