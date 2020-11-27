$(document).ready(function () {
    console.log('JQuery funcionando');

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