 
<?php
 
  include('Head.php');
  include('Navbar.php');

?>

<div class="container"> 
<input class="form-control mr-sm-2 mt-5" id="search" type="search" name="search" placeholder="Search" aria-label="Search">


<table class="table table-dark mt-3">
  <thead >
    <tr>
      <th scope="col">ID factura</th>
      <th scope="col">Cliente</th>
      <th scope="col">Vendedor</th>
      <th scope="col">Fecha de facturacion</th>
      <th scope="col"> </th>
    </tr>
  </thead>
   <tbody id="body">

   </tbody>
</table>

</div>




</div>




<?php
  include('Footer.php');
?>