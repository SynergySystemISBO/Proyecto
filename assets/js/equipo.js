$(document.body).on('submit', '#getEquipoForm', function (e) {
    e.preventDefault();
    let nombre = $('#inputGetEquipo').val();
    fetch(URLprefijoAPI + '/getEquipos/' + nombre, {
        method: 'GET',
    })
        .then(res => res.json())
        .then(data => {
            if (data.success == "1") {
                alertManager('success', data.mensaje);
                var template = Handlebars.templates['listaEquipos'];
                let dataEquipos = {
                    equipos: data.equipos,
                };

                $('#containerEquipos').html(template(dataEquipos));
            }
            else {
                alertManager('error', data.mensaje);
            }
        })
        .catch(err => {
            alertManager('error', 'Hubo un error inesperado');
        })
});



$(document.body).on('click', '.aEquipo', function (e) {
    e.preventDefault();
    console.log($(this).prop('id')) 
});


