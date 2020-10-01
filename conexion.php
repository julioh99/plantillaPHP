<?php

$bd_dns = 'mysql:host=localhost; dbname=julio; charset=utf8';
$bd_user = 'admin';
$bd_password = '3116022910';
$bd_options = array(PDO::ATTR_PERSISTENT => true);
$bds='';
$bds = new PDO($bd_dns, $bd_user, $bd_password, $bd_options);
if($bds){

    echo  '<script>alert("Conexion Exitosa")</script>';
}
else
    echo 'Conexion Erronea';