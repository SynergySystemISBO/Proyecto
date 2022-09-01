$("#btn-usuario").change(function(){
    if(this.checked) {
        $('#usuarios').show();
        $('#deportistas').hide();
        $('#equipos').hide();
        $('#competencias').hide();
        $('#partidos').hide();
        $('#deportes').hide();
    }
});

$("#btn-deportistas").change(function(){
    if(this.checked) {
        $('#usuarios').hide();
        $('#deportistas').show();
        $('#equipos').hide();
        $('#competencias').hide();
        $('#partidos').hide();
        $('#deportes').hide();
    }
});

$("#btn-equipo").change(function(){
    if(this.checked) {
        $('#usuarios').hide();
        $('#deportistas').hide();
        $('#equipos').show();
        $('#competencias').hide();
        $('#partidos').hide();
        $('#deportes').hide();
    }
});

$("#btn-competencia").change(function(){
    if(this.checked) {
        $('#usuarios').hide();
        $('#deportistas').hide();
        $('#equipos').hide();
        $('#competencias').show();
        $('#partidos').hide();
        $('#deportes').hide();
    }
});

$("#btn-partido").change(function(){
    if(this.checked) {
        $('#usuarios').hide();
        $('#deportistas').hide();
        $('#equipos').hide();
        $('#competencias').hide();
        $('#partidos').show();
        $('#deportes').hide();
    }
});

$("#btn-deporte").change(function(){
    if(this.checked) {
        $('#usuarios').hide();
        $('#deportistas').hide();
        $('#equipos').hide();
        $('#competencias').hide();
        $('#partidos').hide();
        $('#deportes').show();
    }
});

//BOTONES USURAIOS
$("#btn-usuario1").change(function(){
    if(this.checked) {
        $('#r-usuarios').show();
        $('#a-usuarios').hide();
        $('#e-usuarios').hide();
        $('#c-deportistas').hide();
        $('#a-deportistas').hide();
        $('#e-deportistas').hide();
        $('#c-equipos').hide();
        $('#a-equipos').hide();
        $('#e-equipos').hide();
    }
});

$("#btn-usuario2").change(function(){
    if(this.checked) {
        $('#r-usuarios').hide();
        $('#a-usuarios').show();
        $('#e-usuarios').hide();
        $('#c-deportistas').hide();
        $('#a-deportistas').hide();
        $('#e-deportistas').hide();
        $('#c-equipos').hide();
        $('#a-equipos').hide();
        $('#e-equipos').hide();
    }
});

$("#btn-usuario3").change(function(){
    if(this.checked) {
        $('#r-usuarios').hide();
        $('#a-usuarios').hide();
        $('#e-usuarios').show();
        $('#c-deportistas').hide();
        $('#a-deportistas').hide();
        $('#e-deportistas').hide();
        $('#c-equipos').hide();
        $('#a-equipos').hide();
        $('#e-equipos').hide();
    }
});

$("#btn-deportistas1").change(function(){
    if(this.checked) {
        $('#r-usuarios').hide();
        $('#a-usuarios').hide();
        $('#e-usuarios').hide();
        $('#c-deportistas').show();
        $('#a-deportistas').hide();
        $('#e-deportistas').hide();
        $('#c-equipos').hide();
        $('#a-equipos').hide();
        $('#e-equipos').hide();
    }
});

$("#btn-deportistas2").change(function(){
    if(this.checked) {
        $('#r-usuarios').hide();
        $('#a-usuarios').hide();
        $('#e-usuarios').hide();
        $('#c-deportistas').hide();
        $('#a-deportistas').show();
        $('#e-deportistas').hide();
        $('#c-equipos').hide();
        $('#a-equipos').hide();
        $('#e-equipos').hide();
    }
});

$("#btn-deportistas3").change(function(){
    if(this.checked) {
        $('#r-usuarios').hide();
        $('#a-usuarios').hide();
        $('#e-usuarios').hide();
        $('#c-deportistas').hide();
        $('#a-deportistas').hide();
        $('#e-deportistas').show();
        $('#c-equipos').hide();
        $('#a-equipos').hide();
        $('#e-equipos').hide();
    }
});

$("#btn-equipo1").change(function(){
    if(this.checked) {
        $('#r-usuarios').hide();
        $('#a-usuarios').hide();
        $('#e-usuarios').hide();
        $('#c-deportistas').hide();
        $('#a-deportistas').hide();
        $('#e-deportistas').hide();
        $('#c-equipos').show();
        $('#a-equipos').hide();
        $('#e-equipos').hide();
    }
});

$("#btn-equipo2").change(function(){
    if(this.checked) {
        $('#r-usuarios').hide();
        $('#a-usuarios').hide();
        $('#e-usuarios').hide();
        $('#c-deportistas').hide();
        $('#a-deportistas').hide();
        $('#e-deportistas').hide();
        $('#c-equipos').hide();
        $('#a-equipos').show();
        $('#e-equipos').hide();
    }
});

$("#btn-equipo3").change(function(){
    if(this.checked) {
        $('#r-usuarios').hide();
        $('#a-usuarios').hide();
        $('#e-usuarios').hide();
        $('#c-deportistas').hide();
        $('#a-deportistas').hide();
        $('#e-deportistas').hide();
        $('#c-equipos').hide();
        $('#a-equipos').hide();
        $('#e-equipos').show();
    }
});