$(document).ready(function(){
    $('#tabla-fixture').show();
    $('#estadisticas').hide();
});

$("#option1").change(function(){
    if(this.checked) {
        $('#tabla-fixture').show();
        $('#estadisticas').hide();
    }
});

$("#option2").change(function(){
    if(this.checked) {
        $('#tabla-fixture').hide();
        $('#estadisticas').show();
    }
});