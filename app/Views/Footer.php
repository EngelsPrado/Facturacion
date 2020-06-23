
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<<<<<<< HEAD
    <script type="text/javascript" >
        $(document).ready(function() {
        console.log('listo')
        $('#search').keyup(function(e) {

           
            document.getElementById("body").innerHTML=''
            e.preventDefault();
            let buscar=document.getElementById('search').value
           
            $.ajax({
            method: "POST",
            url: "/Home/buscar",
            data:{buscar:buscar}
            })
            .done(function( msg ) {
                console.log(msg)
               if (msg){
                let data=JSON.parse(msg)
              
              data.forEach(element => {
                  
                  document.getElementById("body").innerHTML+=
                          '<tr>'+
                              '<th scope="row">'+element.ID+'</th>'+
                              '<td>'+element.Cliente+'</td>'+
                              '<td>'+element.Vendedor+'</td>'+
                              '<td>'+element.Fecha+'</td>'+
                              '<td> <a href=Devolucion/Nueva/'+element.ID+' class="btn btn-primary">Nueva devolucion</button> </td>'+
                              '</tr>'
                          
             });
               }
               
            });
        });
 
      

        

        });

        function guardar(detalle){

        

            detalle.forEach(element => {
             
              if(!document.getElementById("cd-"+element["ID"]).disabled)
                {
                  console.log(element)
                  let cantidadDevolver=document.getElementById("cd-"+element.ID).value
                  let totalDescuento=document.getElementById("td-"+element.ID).textContent
                   data={
                     ID:'1',
                     idFactura: element.idfactura,
                     NombreProducto:element.Nombre_Producto,
                     Cantidad:cantidadDevolver,
                     PrecioUnidad:element.Precio_Unitario,
                     Descuento:element.Descuento,
                     TotalDescuento:totalDescuento
                   }

                   console.log(data)
                  $.ajax({
                    method: "POST",
                    url: "/Devolucion/crearDevolucion",
                    data:data
                    })
                    .done(function( msg ) {
                        console.log(msg)
                      
                      
                      
                    });
                    
                }
           }); 

        }

        function check(id){

          
          let cantidadDevolver=document.getElementById("cd-"+id).disabled

          if (cantidadDevolver)
            document.getElementById("cd-"+id).disabled=false
          else 
          document.getElementById("cd-"+id).disabled=true

        }

        function calcular(id,IDs){
       
         console.log(IDs)
        
          let cantidadDevolver=document.getElementById("cd-"+id).value
          let precioUnitario=document.getElementById("pu-"+id).textContent
          let descuento=document.getElementById("desc-"+id).textContent   
          let subtotalArticulo=document.getElementById("sa-"+id)
         
          let totalDescuento=document.getElementById("td-"+id)
          
          totalDescuento.textContent=(precioUnitario*cantidadDevolver*descuento)/100
          subtotalArticulo.textContent= (precioUnitario*cantidadDevolver)

         
          let subtotal=document.getElementById("subtotal")
          let descuentoTotal=document.getElementById("descuentoTotal")
          let iva=document.getElementById("IVA")
          let total=document.getElementById("total")

          var acum=0
          var acumDescuento=0
          var totalIVA=0
          var bruto=0
          for (let index = 0; index < IDs.length; index++) {
            const element = IDs[index];
            
            let Descuento=document.getElementById("td-"+element).textContent
            let acumSubtotalArticulo=document.getElementById("sa-"+element).textContent
            
            acum+=parseInt(acumSubtotalArticulo,10)
            acumDescuento+=parseInt(Descuento,10)

            subtotal.textContent=acum
            descuentoTotal.textContent=acumDescuento
            totalIVA=iva.textContent=(subtotal.textContent-descuentoTotal.textContent)*0.15
            total.textContent= (subtotal.textContent-descuentoTotal.textContent)+parseInt(totalIVA,10)
          }
                  
          document.getElementById("tr").disabled=true;
        }
=======
    <script type="text/javascript"  >

$(document).ready(function() {
     console.log('listo')
    $('#loginform').submit(function(e) {
        e.preventDefault();
        let email=document.getElementById('exampleInputEmail1').value
        console.log(email)
        $.ajax({
            type: "POST",
            url: '/Home/buscar',
            data: $("#loginform").serialize(),
            success: function(res)
            {
                let data=JSON.parse(res)
                data.forEach(element => {
                    console.log(element); 
                });
            
           },
           error:function(err){
               console.log(err);
           }
       });
     });
});

>>>>>>> fdd3daaedff9bd1e86739c0b6f24fb429e22323c
    </script>
  </body>
</html>