<?php
class year_20
{
 private $ECO_20, $NUC_20, $FECHA_20, $HECHO_20, $VICTIMA_U_OFENDIDO_20, $IMPUTADO_20, $LUGAR_20, $CARPETAS_REMITIDAS_20, $MP_20, $id_20;

    public function __construct($ECO_20, $NUC_20, $FECHA_20, $HECHO_20, $VICTIMA_U_OFENDIDO_20, $IMPUTADO_20, $LUGAR_20, $CARPETAS_REMITIDAS_20, $MP_20, $id_20 = null)
    {
        
        $this->ECO_20 = $ECO_20;
        $this->NUC_20 = $NUC_20;
        $this->FECHA_20 = $FECHA_20;
        $this->HECHO_20 = $HECHO_20;
        $this->VICTIMA_U_OFENDIDO_20 = $VICTIMA_U_OFENDIDO_20;
        $this->IMPUTADO_20 = $IMPUTADO_20;
        $this->LUGAR_20 = $LUGAR_20;
        $this->CARPETAS_REMITIDAS_20 = $CARPETAS_REMITIDAS_20;
        $this->MP_20 = $MP_20;

        if ($id_20) {
            $this->id_20 = $id_20;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO year_20
            (ECO_20, NUC_20, FECHA_20, HECHO_20, VICTIMA_U_OFENDIDO_20, IMPUTADO_20, LUGAR_20, CARPETAS_REMITIDAS_20, MP_20)
                VALUES
                (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("sssssssss", $this->ECO_20, $this->NUC_20, $this->FECHA_20, $this->HECHO_20, $this->VICTIMA_U_OFENDIDO_20, $this->IMPUTADO_20, $this->LUGAR_20, $this->CARPETAS_REMITIDAS_20, $this->MP_20);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id_20, ECO_20, NUC_20, FECHA_20, HECHO_20, VICTIMA_U_OFENDIDO_20, IMPUTADO_20, LUGAR_20, CARPETAS_REMITIDAS_20, MP_20 FROM year_20");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id_20)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id_20,  ECO_20, NUC_20, FECHA_20, HECHO_20, VICTIMA_U_OFENDIDO_20, IMPUTADO_20, LUGAR_20, CARPETAS_REMITIDAS_20, MP_20 FROM year_20 WHERE id_20 = ?");
        $sentencia->bind_param("i", $id_20);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update year_20 set ECO_20 = ?, NUC_20 = ?, FECHA_20 = ?, HECHO_20 = ?, VICTIMA_U_OFENDIDO_20 = ?, IMPUTADO_20 = ?, LUGAR_20 = ?, CARPETAS_REMITIDAS_20 = ?, MP_20 = ? where id_20 = ?");
        $sentencia->bind_param("sssssssssi", $this->ECO_20, $this->NUC_20, $this->FECHA_20, $this->HECHO_20, $this->VICTIMA_U_OFENDIDO_20, $this->IMPUTADO_20, $this->LUGAR_20, $this->CARPETAS_REMITIDAS_20, $this->MP_20, $this->id_20);
        $sentencia->execute();
    }

    public static function eliminar($id_20)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM year_20 WHERE id_20 = ?");
        $sentencia->bind_param("i", $id_20);
        $sentencia->execute();
    }
}
