<?php
require_once('cls_conexion.model.php');
class Clase_Agencia
{
    public function todos()
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT * FROM `agencias`";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function uno($AgenciasId)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT * FROM `agencias` WHERE AgenciasId=$AgenciasId";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function insertar($Nombre_Agencia, $Codigo_Agencia, $Codigo_SRI, $Codigosesp, $Correo, $Telefono, $Direccion)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "INSERT INTO `agencias`(`Nombre_Agencia`, `Codigo_Agencia`, `Codigo_SRI`, `Codigosesp`, `Correo`, `Telefono`, `Direccion`) VALUES('$Nombre_Agencia','$Codigo_Agencia','$Codigo_SRI', '$Codigosesp','$Correo','$Telefono','$Direccion')";
            $result = mysqli_query($con, $cadena);
            return 'ok';
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function actualizar($AgenciasId, $Nombre_Agencia, $Codigo_Agencia, $Codigo_SRI, $Codigosesp, $Correo, $Telefono, $Direccion)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "UPDATE `agencias` SET `Nombre_Agencia`='$Nombre_Agencia',`Codigo_Agencia`='$Codigo_Agencia',`Codigo_SRI`='$Codigo_SRI', `Codigosesp`= '$Codigosesp', `Correo`='$Correo',`Telefono`='$Telefono',`Direccion`='$Direccion' WHERE `AgenciasId`= $AgenciasId";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function eliminar($AgenciasId)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "delete from agencias where AgenciasId=$AgenciasId";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }

    public function Codigo_Agencia_Repetida($Codigo_Agencia)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT count(*) as Codigo_Agencia_Repetida FROM `agencias` WHERE `Codigo_Agencia`= '$Codigo_Agencia'";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
}
