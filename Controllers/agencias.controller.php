<?php
require_once('../Models/cls_agencias.model.php');
$agencia = new Clase_Agencia;
switch ($_GET["op"]) {
    case 'todos':
        $datos = array(); //defino un arreglo
        $datos = $agencia->todos(); //llamo al modelo de agencia e invoco al procedimiento todos y almaceno en una variable
        while ($fila = mysqli_fetch_assoc($datos)) { //recorro el arreglo de datos
            $todos[] = $fila;
        }
        echo json_encode($todos); //devuelvo el arreglo en formato json
        break;
    case "uno":
        $AgenciasId = $_POST["AgenciasId"]; //defino una variable para almacenar el id del usuario, la variable se obtiene mediante POST
        $datos = array(); //defino un arreglo
        $datos = $agencia->uno($AgenciasId); //llamo al modelo de agencia e invoco al procedimiento uno y almaceno en una variable
        $uno = mysqli_fetch_assoc($datos); //recorro el arreglo de datos
        echo json_encode($uno); //devuelvo el arreglo en formato json
        break;
    case 'insertar':
        $Nombre_Agencia = $_POST["Nombre_Agencia"];
        $Codigo_Agencia = $_POST["Codigo_Agencia"];
        $Codigo_SRI = $_POST["Codigo_SRI"];
        $Codigosesp = $_POST["Codigosesp"];
        $Correo = $_POST["Correo"];
        $Telefono = $_POST["Telefono"];
        $Direccion = $_POST["Direccion"];

        $datos = array(); //defino un arreglo
        $datos = $agencia->insertar($Nombre_Agencia, $Codigo_Agencia, $Codigo_SRI, $Codigosesp, $Correo, $Telefono, $Direccion); //llamo al modelo de agencia e invoco al procedimiento insertar
        echo json_encode($datos); //devuelvo el arreglo en formato json
        break;
    case 'actualizar':
        $AgenciasId = $_POST["AgenciasId"];
        $Nombre_Agencia = $_POST["Nombre_Agencia"];
        $Codigo_Agencia = $_POST["Codigo_Agencia"];
        $Codigo_SRI = $_POST["Codigo_SRI"];
        $Codigosesp = $_POST["Codigosesp"];
        $Correo = $_POST["Correo"];
        $Telefono = $_POST["Telefono"];
        $Direccion = $_POST["Direccion"];

        $datos = array(); //defino un arreglo
        $datos = $agencia->actualizar($AgenciasId, $Nombre_Agencia, $Codigo_Agencia, $Codigo_SRI, $Codigosesp, $Correo, $Telefono, $Direccion); //llamo al modelo de agencia e invoco al procedimiento actual
        echo json_encode($datos); //devuelvo el arreglo en formato json
        break;
    case 'eliminar':
        $AgenciasId = $_POST["AgenciasId"]; //defino una variable para almacenar el id del usuario, la variable se obtiene mediante POST
        $datos = array(); //defino un arreglo
        $datos = $agencia->eliminar($AgenciasId); //llamo al modelo de agencia e invoco al procedimiento uno y almaceno en una variable
        echo json_encode($uno); //devuelvo el arreglo en formato json
        break;
    case "Codigo_Agencia_Repetida":
        $Codigo_Agencia = $_POST["Codigo_Agencia"];
        $datos = array(); //defino un arreglo
        $datos = $agencia->Codigo_Agencia_Repetida($Codigo_Agencia); //llamo al modelo de agencia e invoco al procedimiento uno y almaceno en una variable
        $uno = mysqli_fetch_assoc($datos); //recorro el arreglo de datos
        echo json_encode($uno); //devuelvo el arreglo en formato json
        break;
}
