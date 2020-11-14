
<?php
$pdo = new PDO('mysql:host=localhost;dbname=dbturnos','root',''); 
if ($pdo) {
    //echo  '<script>alert("Conexion Exitosa")</script>';  
}else{
    echo  '<script>alert("Conexion Erronea")</script>';
}
/*
//include './Conexion.config.php';
class Conexion{

   public $bolState = false;
   public $strMessage ="";
   private $dbs = null;

   public  function __construct(){
      try{
         $bd_dns = 'mysql:host=localhost; dbname=DBTienda; charset=utf8';
         $bd_user = 'root';
         $bd_password = null;
         $bd_options = array(PDO::ATTR_PERSISTENT => true);
         $this->$bds = new PDO($bd_dns, $bd_user, $bd_password, $bd_options);
         $this->$bolState = true;
         $this->$strMessage = 'Conexion Realizada Correctamente';
         if($bds){
            echo("<script>alert('Conexion Establecida Correctamente');</script>");
            echo"<script>alertify.success('Conexion Establecida Correctamente');</script>";
         }
         else{
            echo  "<script>alertify.error('Conexion No Establecida');</script>";
         }
      } catch (PDOException $th) {
         $this->strMessage =  $th->getmessage();
         die('error' . $th->getmessage());
      }
   }
   public function getdbs(){
      return $this->$bds;
   }

}
$c = new conexion();*/