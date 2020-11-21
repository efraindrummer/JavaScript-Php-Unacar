$(function () {
    console.log('Jquery funcionando')

    $('#search').keyup(function () {
        let search = $('#search').val();
        $.ajax({
            url: 'cliente-search.php',
            type: 'POST',
            data: {search },
            success: function (response) {
                console.log(response);
            }
        })
    })
})