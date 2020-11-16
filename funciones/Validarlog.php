<?php 
include("../config/conexion.php");

session_start();

if(isset($_POST['TxtUsuario']) && isset($_POST['TxtPassword'])){
    $usuario = $_POST['TxtUsuario'];
    $password = $_POST['TxtPassword'];

    
    $consulta ="SELECT Usuario, password FROM tblusuarios WHERE Usuario = '$usuario' AND password = '$password'";
    $result = $pdo->query($consulta);
    

    $row = $result->fetch(PDO::FETCH_NUM);
    if($row == true){
        if ($usuario) {
            header('location: ../pages/inicio.php');
        }else{
            header('location: ../pages/login.php');
        }
        
    }else{
        //No existe usuario
        echo '
        <script>
        alert("Usuario o contraseña incorrectos.");
        window.location = " ../pages/login.php";
        </script>
        ';
    }
}
