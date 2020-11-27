$(document).ready(function () {
    console.log('JQuery funcionando');

    $.ajax({
        url: 'total-clientes.php',
        type: 'GET',
        success: function (response) {
            const totalClients = JSON.parse(response);
            let template = '';
            
            totalClients.forEach(totalClient => {
                template += `
                    <tr>
                        <td>${totalClient.total_clientes}</td>
                    </tr>
                `
            });
            $('#total-clientes').html(template);
        }
    })

    $.ajax({
        url: 'total-juegos.php',
        type: 'GET',
        success: function (response) {
            const totalGames = JSON.parse(response);
            let template = '';
            
            totalGames.forEach(totalGame => {
                template += `
                    <tr>
                        <td>${totalGame.total_juegos}</td>
                    </tr>
                `
            });
            $('#total-juegos').html(template);
        }
    })

    $.ajax({
        url: 'media-edad-clientes.php',
        type: 'GET',
        success: function (response) {
            const mediaClients = JSON.parse(response);
            let template = '';
            
            mediaClients.forEach(mediaClient => {
                template += `
                    <tr>
                        <td>${mediaClient.edad}</td>
                    </tr>
                `
            });
            $('#cliente_media').html(template);
        }
    })
})