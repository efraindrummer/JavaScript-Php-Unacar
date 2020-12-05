$(document).ready(function () {
    console.log('JQuery funcionando');

    //agregar a los nuevos juegos
    $('#juegos-form').submit(function(e) {
        const postData = {
            nombre_juego: $('#nombre_juego').val(),
            descripcion_juego: $('#descripcion_juego').val(),
            fecha_lanzamiento: $('#fecha_lanzamiento').val(),
            precio: $('#precio').val(),
            GATEGORIA_id_categoria: $('#GATEGORIA_id_categoria').val()
        };
        $.post('juego-agregar.php', postData, function (response) {
            console.log(response);
            $('#juegos-form').trigger('reset');
        });
        e.preventDefault();
        
    });

    //listar o consultar a los nuevos juegos
    $.ajax({
        url: 'games-list.php',
        type: 'GET',
        success: function (response) {
            const juegos = JSON.parse(response);
            let template = '';
            
            juegos.forEach(juego => {
                template += `
                    <tr>
                        <td>${juego.id_juego}</td>
                        <td>${juego.nombre_juego}</td>
                        <td>${juego.descripcion_juego}</td>
                        <td>${juego.fecha_lanzamiento}</td>
                        <td>${juego.precio}</td>
                        <td>${juego.GATEGORIA_id_categoria}</td>
                    </tr>
                `
            });
            $('#juegos-list').html(template);
        }
    })
})