<?php
include("../config/conexion.php");

$id = $_POST['TxtId'] ?? null;
$nombres = $_POST['TxtNombres'] ?? null;
$apellidos = $_POST['TxtApellidos'] ?? null;
$sexo = $_POST['CbxSexo'] ?? null;
$telefono = $_POST['TxtTelefono'] ?? null;
$correo = $_POST['TxtCorreo'] ?? null;
$direccion = $_POST['TxtDireccion'] ?? null;

if (isset($_POST['BtnRegistro'])) {
    if ($_POST['TxtId']!=null ||$_POST['TxtNombres']!=null ||$_POST['TxtApellidos']!=null ||$_POST['CbxSexo']!=0||
        $_POST['TxtTelefono']!=null||$_POST['TxtCorreo']!=null||$_POST['TxtDireccion']!=null) {

        $strSQL = "INSERT INTO tblpersonas (PKId,Nombres,Apellidos,FKCodigo_TblSexo,Correo,Telefono,Direccion) 
                    VALUES (:ID, :Nombres, :Apellidos, :Sexo, :Telefono,:Correo,:Direccion);";

        $aryParametros = [
            ':ID' => $id,
            ':Nombres' => strtoupper($nombres),
            ':Apellidos' => strtoupper($apellidos),    
            ':Sexo' => $sexo,
            ':Telefono' => $telefono,
            ':Correo' => strtoupper($correo),
            ':Direccion' => strtoupper($direccion)
        ]; // Arreglo asociativo => :propiedad

        $objSentencia = $bds->prepare($strSQL);
        # $objSentencia->execute(); // Ejecutar sin parametros
        $objSentencia->execute($aryParametros);
        echo "<script>alert('Registrado Correctamente ✔')</script>";
        echo"<script>alertify.success('Guardado Correctamente');</script>";

    }
}