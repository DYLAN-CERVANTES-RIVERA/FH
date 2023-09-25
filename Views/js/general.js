
$(document).ready( function () {

    $(document).on("click", ".btnSalir", function(){	
        let urlBase = document.getElementById('url_base').value;
        let url= urlBase;
        Swal.fire({
            title: 'Va cerrar sesi&oacute;n',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'No',
            icon: "question",
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: urlBase+'/Login/salir',
                    type: "POST",
                    data:  {
                    },    
                    success: function(data) {   
                        window.location.assign(urlBase);      
                    }
                  });//ajax
            } 
          })
    });       

});




