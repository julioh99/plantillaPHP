<?php
error_reporting(E_ALL ^ E_NOTICE);
$mensaje="";
session_start();
if (isset($_POST['btnAccion'])) {
    switch ($_POST['btnAccion']) {
        case 'agregar':
            /*Guardar Codigo */
            if (is_numeric(openssl_decrypt($_POST['Codigo'], COD, KEY))) {
                $Codigo = openssl_decrypt($_POST['Codigo'], COD, KEY);
                $mensaje.= "OK Codigo correcto " . $Codigo . "<br/>";
            } else {
                $mensaje.= "Ups.... Codigo Incorrecto" . $Codigo . "<br/>";
                break;
            }
            /* Guardar Nombre */
            if (is_string(openssl_decrypt($_POST['Nombre'], COD, KEY))) {
                $Nombre = openssl_decrypt($_POST['Nombre'], COD, KEY);
                $mensaje.= "OK Nombre correcto " . $Nombre . "<br/>";
            } else {
                $mensaje.= "Ups.... Nombre Incorrecto" . $Nombre . "<br/>";
                break;
            }
            /*Guardar Precio */
            if (is_numeric(openssl_decrypt($_POST['Precio'], COD, KEY))) {
                $Precio = openssl_decrypt($_POST['Precio'], COD, KEY);
                $mensaje.= "OK Precio correcto " . $Precio . "<br/>";
            } else {
                $mensaje.= "Ups.... Precio Incorrecto" . $Precio . "<br/>";
                break;
            }
            /*Guardar Cantidad */
            if (is_numeric($_POST['Cantidad'])) {
                $Cantidad = number_format( $_POST['Cantidad']);
                $mensaje.= "OK Cantidad correcto " . $Cantidad . "<br/>";
            } else {
                $mensaje.= "Ups.... Cantidad Incorrecto" . $Cantidad . "<br/>";
                break;
            }


            if (!isset($_SESSION['CARRITO'])) {
                $producto=array(
                    'PKCodigo'=>$Codigo,
                    'Nombre'=>$Nombre,
                    'Cantidad'=>$Cantidad,
                    'Precio'=>$Precio,
                );
                $_SESSION['CARRITO'][0]=$_POST;
                $mensaje="producto agregado al carrito";
                
            }else{
                foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
                    if ($producto['PKCodigo']==$Codigo) {
                        $cantidad = $producto['Cantidad']+ $Cantidad;
                    }
                }
                $NumeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
                    'PKCodigo'=>$Codigo,
                    'Nombre'=>$Nombre,
                    'Cantidad'=>$Cantidad,
                    'Precio'=>$Precio,
                );
                $_SESSION['CARRITO'][$NumeroProductos]=$_POST;
                $mensaje="producto agregado al carrito";
                
            }
           // $mensaje=print_r($_SESSION,true);
        break;

        case 'Eliminar':
            if (!is_numeric($cod)) {
                $cod = openssl_decrypt($_POST['Codigo'], COD, KEY);                
                foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
                    if ($producto['PKCodigo']==$p) {                        
                        unset($_SESSION['CARRITO'][$indice]);
                        echo "<script>alert('Elemento Borrado.... ')</script>";
                    break;
                    }
                    else{
                        echo "<script>alert('No encontrado.... ')</script>";
                    break;
                    }
                }
            }else {
                $mensaje.= "Ups.... Codigo Incorrecto" . $Codigo . "<br/>";
                break;
            }
        break;

        case 'EliminarAll':
            session_destroy();
            break;
        
    }
}