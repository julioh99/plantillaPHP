
<?php
$pdo = new PDO('mysql:host=localhost;dbname=dbturnos','root',''); 
if ($pdo) {
    echo  '<script>alert("Conexion Exitosa")</script>';  
}else{
    echo  '<script>alert("Conexion Erronea")</script>';
}
/*
<?php
$pdo = new PDO('mysql:host=localhost;dbname=factura','factura','factura'); 
if ($pdo) {
    echo  '<script>alert("Conexion Exitosa")</script>';  
}else{
    echo  '<script>alert("Conexion Erronea")</script>';
}
*/