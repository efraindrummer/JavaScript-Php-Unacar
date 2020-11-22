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

    $('#client-form').submit(function(e) {

        const postData = {
            nombre_cliente: $('#nombre').val(),
            apellido_cliente: $('#apellidos').val(),
            edad: $('#edad').val(),
            fecha_registro: $('#fecha_registro').val()
        };

        $.post('cliente-agregar.php', postData, function (response) {

            $('#client-form').trigger('reset');
        });
        e.preventDefault();
    });

    $.ajax({
        url: 'cliente-list.php',
        type: 'GET',
        success: function (response) {
            const clientes = JSON.parse(response);
            let template = '';
            
            clientes.forEach(clientes => {
                template += `
                    <tr>
                        <td>${clientes.id_cliente}</td>
                        <td>${clientes.nombre_cliente}</td>
                        <td>${clientes.apellido_cliente}</td>
                        <td>${clientes.edad}</td>
                        <td>${clientes.fecha_registro}</td>
                    </tr>
                `
            });
            $('#clientes-list').html(template);
        }
    })
});