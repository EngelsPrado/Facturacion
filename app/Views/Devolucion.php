<?php 

include('Head.php');
include('Navbar.php');
?>


<div class="container mt-5">
        <button type="button" onclick='guardar(<?= json_encode( $datos)?>)' class="btn btn-primary mb-4">Guardar</button>
        <div class="row">
            <table class="table text-center ">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Id producto</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cantidad Devolver</th>
                        <th scope="col">Cantidad </th>
                        <th scope="col">Precio Unitario</th>
                        <th scope="col">% Descuento</th>
                        <th scope="col">Descuento</th>
                        <th scope="col">Subtotal Articulo</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                
                
                foreach ($datos as $item):?>
                    
                       <tr id="tr">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" onchange=check(<?=$item["ID"]?>) type="checkbox" id=<?=$item["ID"] ?> value="option1" aria-label="...">
                                </div>
                            </td>
                            <th scope="row"><?=$item["ID"] ?></th>
                            <td><?=$item["Nombre_Producto"] ?></td>
                            <td><?=$item["Descripcion"] ?></td>
                            <td><input id='cd-<?=$item["ID"]?>' disabled=true onchange=calcular(<?=$item["ID"]?>,<?= json_encode($IDs)?>)  type="number" min="0" max=<?=$item["Cantidad"] ?> class=" ml-4 input-group-prepend"/> </td>
                            <td><?=$item["Cantidad"] ?></td>
                            <td id='pu-<?=$item["ID"]?>' ><?=$item["Precio_Unitario"] ?></td>
                            <td id='desc-<?=$item["ID"]?>'><?=$item["Descuento"] ?></td>
                            <td id='td-<?=$item["ID"]?>'><?= $item["Total_Descuento"] ?>  </td>
                            <td id='sa-<?=$item["ID"]?>'><?=$item["Subtotal_Articulo"] ?></td>
                        </tr>
                    
                    <?php 
                endforeach;
                ?>
                </tbody>
            </table>
           
        </div>
    </div>

    <div class="container margin">
        <div class="row justify-content-end ">
            <div class="col-3 ">
                <table class="table">
                    <tbody class="">
                        <tr>
                            <th class="pl-5">Subtotal</th>
                            <td id="subtotal"> <?= $subtotal ?>  </td>

                        </tr>
                        <tr>
                            <th class="pl-5">Descuento</th>
                            <td id="descuentoTotal"><?= $descuento ?> </td>
                        </tr>
                        <tr>
                            <th class="pl-5">IVA</th>
                            <td id="IVA"><?= $IVA=($subtotal-$descuento)*0.15 ?></td>
                        </tr>
                        <tr>
                            <th class="pl-5">TOTAL</th>
                            <td id="total"><?= ($subtotal-$descuento)+ $IVA ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
<?php
include('Footer.php')

?>

