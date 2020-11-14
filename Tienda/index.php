<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
include('global/config.php');
include('global/conexion.php');
include('carrito.php');
include('templates/cabecera.php');

?>

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


<?php include('templates/pie.php') ?>