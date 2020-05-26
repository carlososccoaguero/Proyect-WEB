
function consulta3() {
     $.ajax({
        url: "https://jsonplaceholder.typicode.com/photos",
        type: 'GET',
        dataType: 'JSON',
        beforeSend: function (xhr) {
            $("#espera").css('display', 'block');                  
        },
        success: function (resultado) {
            var resultado1 = $("#Muestra-Consulta3");
            $.each(resultado, function (index, elemento) {
                if (elemento.id == $("#codigo3").val()) {
                     resultado1.append('albumId: '+elemento.albumId+'<br> id: '+ elemento.id+'<br> title: '+elemento.title+'<br>'+'<br> <img src='+elemento.url+'> <br> <img src='+elemento.thumbnailUrl+'><br> <br>'); 
                }
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error");
        },
        complete: function (jqXHR, textStatus) {
            alert("Completado con exito");
        }
    });
}



