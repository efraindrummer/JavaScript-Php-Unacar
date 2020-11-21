$(document).ready(function () {
    console.log('Jquery funcionando')

    $('#clientes-result').hide();

    $('#search').keyup(function(e) {

        if ($('#search').val()) {
            let search = $('#search').val();

            $.ajax({
                url: 'cliente-search.php',
                type: 'POST',
                data: { search },
                success: function (response) {
                    let clientes = JSON.parse(response);
                    let template = '';

                    clientes.forEach(client => {
                        template += `<li> ${client.nombre_cliente} </li>`;
                    });

                    $('#container').html(template);
                    $('#clientes-result').show();
                }
            });
        }
    });

    $('#client-form').on('submit', function(event) {
        event.preventDefault();
        const postData = {
            nombre: $('#nombre').val(),
            apellidos: $('#apellidos').val(),
            edad: $('#edad').val(),
            fecha_registro: $('#fecha_registro').val()
        };
        $.post('cliente-agregar.php', postData, function (response) {
            console.log(response);
        });
    });
});