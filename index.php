<<<<<<< HEAD
<?php 
header('Location: pages/login.php');
echo 'Obeimar Estuvo Aqui';
=======
/*Reemplazar*\
<?php 
header('Location: pages/login.php');

session_start();

if(isset($_GET['cerrar_sesion'])){
    session_unset();
    //Destroy the session
    session_destroy();
    header('location: ../frontend/Frm_Login.php');
}

if(isset($_SESSION['rol'])){
    header('location: ../frontend/Frm_Home.php');
}

if(isset($_POST['TxtUsuario']) && isset($_POST['TxtPassword'])){
    $usuario = $_POST['TxtUsuario'];
    $password = $_POST['TxtPassword'];

    $conexion = $db->connect();

    $consulta = $conexion->prepare ("SELECT * FROM tbl_usuarios WHERE user_pkUsuario = :usuario and user_contraseña = :password");
    $consulta->execute(['usuario' => $usuario, 'password' => $password]);

    $row = $consulta->fetch(PDO::FETCH_NUM);
    if($row == true){
        //validar rol
        $rol = $row[3];
        $_SESSION['rol'] = $rol;

        switch($_SESSION['rol']){
            case 1 :
                header('location: ..//.php');
            break;
            
            case 2;
            header('location: ..//.php');
            break; 

            default:
        }
    }else{
        //No existe usuario
        echo '
        <script>
        alert("Usuario o contraseña incorrectos.");
        window.location = "../frontend/Frm_Login.php";
        </script>
        ';
    }
}

>>>>>>> 48733822eed6e71d860b0c43e71b25260a5afd90
