<?php
class year_21
{
 private $ECO_21, $NUC_21, $FECHA_21, $HECHO_21, $VICTIMA_U_OFENDIDO_21, $IMPUTADO_21, $LUGAR_21, $CARPETAS_REMITIDAS_21, $MP_21, $id_21;

    public function __construct($ECO_21, $NUC_21, $FECHA_21, $HECHO_21, $VICTIMA_U_OFENDIDO_21, $IMPUTADO_21, $LUGAR_21, $CARPETAS_REMITIDAS_21, $MP_21, $id_21 = null)
    {
        
        $this->ECO_21 = $ECO_21;
        $this->NUC_21 = $NUC_21;
        $this->FECHA_21 = $FECHA_21;
        $this->HECHO_21 = $HECHO_21;
        $this->VICTIMA_U_OFENDIDO_21 = $VICTIMA_U_OFENDIDO_21;
        $this->IMPUTADO_21 = $IMPUTADO_21;
        $this->LUGAR_21 = $LUGAR_21;
        $this->CARPETAS_REMITIDAS_21 = $CARPETAS_REMITIDAS_21;
        $this->MP_21 = $MP_21;

        if ($id_21) {
            $this->id_21 = $id_21;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO year_21
            (ECO_21, NUC_21, FECHA_21, HECHO_21, VICTIMA_U_OFENDIDO_21, IMPUTADO_21, LUGAR_21, CARPETAS_REMITIDAS_21, MP_21)
                VALUES
                (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("sssssssss", $this->ECO_21, $this->NUC_21, $this->FECHA_21, $this->HECHO_21, $this->VICTIMA_U_OFENDIDO_21, $this->IMPUTADO_21, $this->LUGAR_21, $this->CARPETAS_REMITIDAS_21, $this->MP_21);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id_21, ECO_21, NUC_21, FECHA_21, HECHO_21, VICTIMA_U_OFENDIDO_21, IMPUTADO_21, LUGAR_21, CARPETAS_REMITIDAS_21, MP_21 FROM year_21");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id_21)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id_21,  ECO_21, NUC_21, FECHA_21, HECHO_21, VICTIMA_U_OFENDIDO_21, IMPUTADO_21, LUGAR_21, CARPETAS_REMITIDAS_21, MP_21 FROM year_21 WHERE id_21 = ?");
        $sentencia->bind_param("i", $id_21);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update year_21 set ECO_21 = ?, NUC_21 = ?, FECHA_21 = ?, HECHO_21 = ?, VICTIMA_U_OFENDIDO_21 = ?, IMPUTADO_21 = ?, LUGAR_21 = ?, CARPETAS_REMITIDAS_21 = ?, MP_21 = ? where id_21 = ?");
        $sentencia->bind_param("sssssssssi", $this->ECO_21, $this->NUC_21, $this->FECHA_21, $this->HECHO_21, $this->VICTIMA_U_OFENDIDO_21, $this->IMPUTADO_21, $this->LUGAR_21, $this->CARPETAS_REMITIDAS_21, $this->MP_21, $this->id_21);
        $sentencia->execute();
    }

    public static function eliminar($id_21)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM year_21 WHERE id_21 = ?");
        $sentencia->bind_param("i", $id_21);
        $sentencia->execute();
    }
}
