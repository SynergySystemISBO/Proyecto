const deporte = qs('deporte');
$(document).ready(function () {
    $('#h2Deporte').html(deporte);
    fetch(URLprefijoAPI + '/getCompetencias/'+deporte, {
        method: 'GET',
    })
        .then(res => res.json())
        .then(data => {
            if (data.success == "1") {
                var template = Handlebars.templates['listaCompetencias'];
                let dataCompetencias = {
                    competencias: data.competencias
                };
                $('#containerCompetencias').append(template(dataCompetencias));
            }
            else {
                console.log('ERROR');
            }
        })
        .catch(err => {
            console.log('ERROR');
        })
})


function qs(key) {
    key = key.replace(/[*+?^$.\[\]{}()|\\\/]/g, "\\$&"); // escape RegEx meta chars
    var match = location.search.match(new RegExp("[?&]"+key+"=([^&]+)(&|$)"));
    return match && decodeURIComponent(match[1].replace(/\+/g, " "));
    }