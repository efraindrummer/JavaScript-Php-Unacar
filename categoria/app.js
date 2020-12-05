$(document).ready(function () {
    console.log('JQuery funcionando');

    //buscar juegos
    $('#category-result').hide();

    $('#search').keyup(function(e) {

        if ($('#search').val()) {
            let search = $('#search').val();

            $.ajax({
                url: 'games-search.php',
                type: 'POST',
                data: { search },
                success: function (response) {
                    let categories = JSON.parse(response);
                    let template = '';

                    categories.forEach(categorie => {
                        template += `<li> ${categorie.nombre_categoria} </li>`;
                    });

                    $('#container').html(template);
                    $('#category-result').show();
                }
            });
        }
    });

    //consultar categorias
    $.ajax({
        url: 'categoria-list.php',
        type: 'GET',
        success: function (response) {
            const categorias = JSON.parse(response);
            let template = '';
            
            categorias.forEach(categoria => {
                template += `
                    <tr>
                        <td>${categoria.id_categoria}</td>
                        <td>${categoria.nombre_categoria}</td>
                    </tr>
                `
            });
            $('#category-list').html(template);
        }
    })
})