$(document).ready(function () {
    console.log('JQuery funcionando');

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
                    </tr>
                `
            });
            $('#juegos-list').html(template);
        }
    })
})