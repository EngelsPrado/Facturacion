
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
