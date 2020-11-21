function agregar_datos(){
    var datos = $("#form_registrar_cliente").serialize();

    $.ajax({
        method:"POST",
        url:"../clientes/insertarCliente.php",
        data: datos,
        success: function (e) {
            if(e == 1){
                alert("Registro Exitoso");
            }else{
                alert("Error de registro");
            }
        }
    });

    return false;
}