
<?php
$servidor = "mysql:dbname=dbturnos; host=localhost"; 
try 
{
    $pdo  = new PDO($servidor,"root","",array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
   // echo  '<script>alert("Conexion Exitosa")</script>';  
}catch(PDOException $e){
    echo  '<script>alert("Conexion Erronea")</script>';
}
?>