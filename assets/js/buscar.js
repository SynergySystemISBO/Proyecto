$(document).ready(function(){
    $('#info-equipo').hide();
    $('#plantel-equipo').hide();
});

$("#boton-buscar").click(function(){
        $('#info-equipo').show();
        $('#plantel-equipo').show();
});
$(document).ready(function(){
    $('#info-jugador').hide();
    $('#estadisticas').hide();
});

$("#boton-buscar").click(function(){
        $('#info-jugador').show();
        $('#estadisticas').show();
});