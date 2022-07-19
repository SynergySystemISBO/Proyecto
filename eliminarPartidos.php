<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAdminPartidos.css">
    <title>S.I.G.D.</title>
</head>
<body>
    <header>
        <div class="header1">
           <p><a href="login.php">CERRAR SESION</a></p>
           <nav class="header2">
               <img class="logo" src="img/LOGO PAGINA.png" alt="LOGO" width="150px" height="150px">
               <ul>
                   <li><a href="index.php">INICIO</a> </li>
                   <li><a href="homeFutbol.php">FÚTBOL</a> </li>
                   <li><a href="homeBasketball.php">BASKETBALL</a></li>
                   <li><a href="homeHandball.php">HANDBALL</a></li>
                   <li><a href="homePolideportivo.php" hidden>POLIDEPORTIVO</a></li>
                   <li><a href="paginaEquipos.php">EQUIPOS</a></li>
                   <li><a href="paginaJugadores.php">JUGADORES</a></li>
                   <li><a href="homeAdmin.php" style="color: #045D8C;">ADMIN</a></li>
                   
                </ul>
           </nav>
        </div>
    </header>

    <div class="contenido" style="margin-top: 80px;">
        <div class="figura1">
            <p>Hola, NOMBRE ADMIN</p>
        </div>
        <div class="figura2">
            <p>ELIMINAR PARTIDO</p>
        </div>      
    </div>
    <div class="formulario">
        <form action="" method="post">
            <div class="figura3">
                <p>DEPORTE</p>
            </div>

            <select name="deporte" id="deporte">
            <option value=""  disabled></option>
            <option value="futbol" selected>FÚTBOL</option>
            <option value="basketball">BASKETBALL</option>
            <option value="handball">HANDBALL</option>    
            </select>

            <div class="figura3">
                <p>COMPETENCIA</p>
            </div>

            <select name="competencia" id="competencia">
            <option value=""  disabled></option>
            <option value="liga1" selected>LIGA 1</option>
            <option value="liga2">LIGA 2</option>
            <option value="liga3">LIGA 3</option>    
            </select>

            <div class="figura3">
                <p>EQUIPO LOCAL</p>
            </div>

            <select name="equipoLocal" id="equipoLocal">
            <option value=""  disabled></option>
            <option value="equipo1" selected>EQUIPO 1</option>
            <option value="equipo2">EQUIPO 2</option>
            <option value="equipo3">EQUIPO 3</option>    
            </select>

            <div class="figura3">
                <p>EQUIPO VISITANTE</p>
            </div>

            <select name="equipoVisitante" id="equipoVisitante">
            <option value=""  disabled></option>
            <option value="equipo4" selected>EQUIPO 4</option>
            <option value="equipo5">EQUIPO 5</option>
            <option value="equipo6">EQUIPO 6</option>    
            </select>

            <div class="figura3">
                <p>ÁRBITRO 1</p>
            </div>

            <select name="arbitro1" id="arbitro1">
            <option value=""  disabled></option>
            <option value="arbitroA" selected>ARBITRO 1</option>
            <option value="arbitroB">ARBITRO 2</option>
            <option value="arbitroC">ARBITRO 3</option>    
            </select>

            <div class="figura3">
                <p>ÁRBITRO 2</p>
            </div>

            <select name="arbitro2" id="arbitro2">
                <option value=""  disabled></option>
                <option value="arbitroA" selected>ARBITRO 4</option>
                <option value="arbitroB">ARBITRO 5</option>
                <option value="arbitroC">ARBITRO 6</option>    
                </select>

            <div class="figura3">
                <p>ÁRBITRO 3</p>
            </div>

            <select name="arbitro3" id="arbitro3">
                <option value="" disabled></option>
                <option value="arbitroA" selected>ARBITRO 7</option>
                <option value="arbitroB">ARBITRO 8</option>
                <option value="arbitroC">ARBITRO 9</option>    
            </select>

            <div class="figura3">
                <p>CANCHA</p>
            </div>

            <select name="cancha" id="cancha">
                <option value=""  disabled></option>
                <option value="cancha1" selected>CANCHA 1</option>
                <option value="cancha2">CANCHA 2</option>
                <option value="cancha3">CANCHA 3</option>    
            </select>
            <button onclick="show()" type="submit">ELIMINAR</button>
        </form>
        <script>
            function show(){
                alert("PARTIDO ELIMINADO")
            }
        </script>
    </div>
    <footer>
            <div class="piePagina">
                <nav class="pie">
                        <p>Desarrollado por Synergy System | <a href="https://www.SysergySystem.com.uy">www.SysergySystem.com.uy</a> | Contacto: 0800 1234</p>      
                </nav>
            </div>
        </footer>
</body>
</html>