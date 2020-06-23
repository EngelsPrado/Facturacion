<<<<<<< HEAD
$(document).ready(function() {
  console.log('listo')
  $('#search').keyup(function(e) {
      e.preventDefault();
      let email=document.getElementById('search').value
      console.log(email)
      $.ajax({
      method: "POST",
      url: "/Home/buscar",
      data:$( this ).serialize()
      })
      .done(function( msg ) {
         let data=JSON.parse(msg)
         console.log(data)
      });
  });
  });
console.log('Lisssto')
=======

$(document).ready(function() {
     console.log('listo')
    $('#loginform').submit(function(e) {
        e.preventDefault();
        let email=document.getElementById('exampleInputEmail1').value
        console.log(email)
      $.ajax({
        method: "GET",
        url: "/Home/buscar",
        data: { email }
        })
        .done(function( msg ) {
            alert( "Data Saved: " + msg );
        });
     });
});
>>>>>>> fdd3daaedff9bd1e86739c0b6f24fb429e22323c
