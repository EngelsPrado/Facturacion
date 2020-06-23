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