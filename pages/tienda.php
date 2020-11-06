<?php 
include("../vistas/cabecera.php");
include("../vistas/sidebar.php");
?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard v3</h1>
<?php
include('../config/Conexion.php');
include('carrito.php');

?>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
<br>
<?php if ($mensaje != "") {?>

<div class="alert alert-dark" role="alert">
    <?php echo $mensaje; ?>

    <a href="mostrarCarrito.php" class="badge badge-success">Ver Carrito</a>
    <hr>
</div>
<?php } ?>

<div class="row">

    <?php
    $sentencia = $pdo->prepare("select * from tblproductos");
    $sentencia->execute();
    $listaproductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    // print_r($listaproductos);
    ?>

    <?php foreach ($listaproductos as $producto) { ?>

    <div class="col-3" >
        <div class="card" >
            <img title="<?php echo $producto['Nombre_Corto'] ?>" alt="Título" class="card-img-top"
                src="<?php echo $producto['Imagen'] ?>" data-toggle="popover" data-trigger="hover"
                data-content="<?php echo $producto['Descripcion'] ?>" height="317 px">
            <div class="card-body">
                <span><?php echo $producto['Nombre'] ?></span>
                <h5 class="card-title">$<?php echo $producto['Precio'] ?></h5>
                <p class="card-text"><?php echo $producto['Categoria'] ?></p>
                <form action="" method="POST">
                    <input type="hidden" name="Codigo" id="Codigo"
                        value="<?php echo openssl_encrypt($producto['PKCodigo'], COD, KEY);  ?>">
                    <input type="hidden" name="Nombre" id="Nombre"
                        value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);  ?>">
                    <input type="hidden" name="Precio" id="Precio"
                        value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
                    <input type="hidden" name="Stock" id="Stock" value="<?php echo $producto['Stock'] ?>">
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <a type="button" onclick="Func_Resta();"><span class="fas fa-minus"></span></a>
                        </div>
                        <input type="number" class="form-control" placeholder="Cantidad" name="Cantidad" min="1"
                            max="<?php echo $producto['Stock'] ?>" id="Cantidad" value="1" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <a><span class="fas fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit" id="btnAccion" name="btnAccion"
                        value="agregar"> Agregar al Carrito</button>
                </form>
            </div>
        </div>
    </div>

    <?php } ?>

</div>

<script>
$(function() {
    $('[data-toggle="popover"]').popover()
})
</script>
<script>
function Func_Resta() {
    var varStock = document.getElementById("Stock").value;
    var varCantidad = document.getElementById("Cantidad").value;
    varResta = varCantidad - 1;
    alert('Entre funcion!! ' + VarStock);
    if (varResta > 1 && varResta < VarStock) {
        document.getElementById("Cantidad").value = varResta;
    }

}
</script>
<script src="https://kit.fontawesome.com/9788333896.js" crossorigin="anonymous"></script>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

 
</div>
<?php 
include("../vistas/footer.php");
?>
<!-- ./wrapper -->

