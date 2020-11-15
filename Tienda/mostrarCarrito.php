<script src="https://kit.fontawesome.com/9788333896.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js" integrity="sha512-gYUM+7JjtBqPPGOgwgOZ+NwjGl+11/EP124oB+ihjlBpLgP5LTh7R/Iwcdy//cgH+QzrjspBiJI5iUegTNww3w==" crossorigin="anonymous"></script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
  
} );
</script>


<?php
include('global/config.php');
include('carrito.php');
include('templates/cabecera.php');
?>
<br>
<h3>Lista del Carrito</h3>
<?php if(!empty($_SESSION['CARRITO'])){ ?>
<table id="table_id" class="table table-striped table-bordered"  style="width:100%">
    <tbody>
        <tr>
            <th width='40%' class="text-center">DESCRIPCIÓN</th>
            <th width='15%' class="text-center">CANTIDAD</th>
            <th width='20%' class="text-center">PRECIO</th>
            <th width='20%' class="text-center">Total</th>
            <th width='5%'>----</th>
        </tr>
        <?php  $total=0;?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
        <tr>
            <td width='40%' class="text-center"><?php echo openssl_decrypt($producto['Nombre'], COD, KEY); ?></td>
            <td width='15%' class="text-center"><?php echo $producto['Cantidad']; ?></td>
            <td width='20%' class="text-center">
                $<?php echo number_format(openssl_decrypt($producto['Precio'], COD, KEY));?></td>
            <td width='20%' class="text-center">
                $<?php echo number_format($producto['Cantidad'] * openssl_decrypt($producto['Precio'], COD, KEY),2); ?>
            </td>
            <td width='5%'>
                <form action="" method="POST">
                <input type="hidden" 
                name="Codigo" 
                id="Codigo" 
                value="<?php echo  openssl_decrypt($producto['Codigo'], COD, KEY) ?>">
                <button 
                    class="btn btn-outline-danger" 
                    type="submit" 
                    name="btnAccion" 
                    value="Eliminar">
                    <i class="fas fa-backspace"></i>
                </button>
                </form>
            </td>
        </tr>
        <?php  $total=$total+(openssl_decrypt($producto['Precio'], COD, KEY) * $producto['Cantidad'] );?>
        <?php  }?>
        <tr>
            <td colspan="3" align="right">
                <h3>Total Carrito:</h3>
            </td>
            <td align="right">
                <h3><?php $t=number_format($total,2); echo ("$$t"); ?></h3>
            </td>
            <td>
            <form action="" method="POST">
            <button class="btn btn-outline-danger" type="submit" name="btnAccion" value="EliminarAll">
            <div class="center br3 bg-orange9 ph4 pv3 lh0 bt bl bw2 b--black-20 white tc"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-trash-alt fa-w-14 fa-spin fa-lg"><path fill="currentColor" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z" class=""></path></svg> <span class="fw6 f4 ml3"></span>
            </button>
            </form>
            </div>
            </td>
        </tr>
    </tbody>
</table>
<?php }else{?>
<div class="card alert alert-warning">No hay Productos en el Carrito, Ve a comprar <i class="fas fa-shopping-cart"></i></div>
<?php } ?>
<?php include('templates/pie.php') ?>