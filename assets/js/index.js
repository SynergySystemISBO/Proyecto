$(document).ready(function () {
    fetch(URLprefijoAPI + '/getDeportes', {
        method: 'GET',
    })
        .then(res => res.json())
        .then(data => {
            if (data.success == "1") {
                var template = Handlebars.templates['listaDeportes'];
                let dataDeporte = {
                    deportes: data.deportes
                };
                $('#containerModalDeportes').append(template(dataDeporte));
            }
            else {
                console.log('prueba');
            }
        })
        .catch(err => {
            console.log('prueba')
        })
})