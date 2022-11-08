$(document.body).on('submit', '#getJugadorForm', function (e) {
    e.preventDefault();
    let ci = $('#inputGetJugador').val();

  
  fetch(URLprefijoAPI + '/getJugador/'+ci, {
    method: 'GET',
})
    .then(res => res.json())
    .then(data => {
        if (data.success == "1") {
            alertManager('success', data.mensaje);
            
            var template = Handlebars.templates['infoJugador'];

            if(data.data['nomequipo']===null){
                data.data['nomequipo'] = 'No tiene equipo';
            }

            let dataJugador = {
                nombre: data.data['nomjugador'],
                apellido: data.data['apjugador'],
                peso: data.data['peso'], 
                altura: data.data['altura'],
                dorsal: data.data['dorsal'],
                nac: data.data['fechanacjugador'],
                posicion: data.data['nomposicion'],
                equipo: data.data['nomequipo'],
                incidencias: data.incidencias
            };

            if ($('#jugadorInfoDiv').length) {
                $('#jugadorInfoDiv').remove();
                $('#containerFormulario').append(template(dataJugador));
            }
            else {
                $('#containerFormulario').append(template(dataJugador));
            }

        }
        else {
            alertManager('error', data.mensaje);
        }
    })
    .catch(err => {
        alertManager('error', 'Hubo un error inesperado');
    })


 });