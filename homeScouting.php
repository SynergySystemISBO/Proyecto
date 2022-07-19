<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleScouting.css">
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
                   <li><a href="homePolideportivo.php">POLIDEPORTIVO</a></li>
                   <li><a href="paginaEquipos.php">EQUIPOS</a></li>
                   <li><a href="paginaJugadores.php">JUGADORES</a></li>
                   <li><a href="homeAdmin.php" style="color: #045D8C;">SCOUTING</a></li>
                   
                </ul>
           </nav>
        </div>
    </header>

    <div class="contenido" style="margin-top: 80px;">
        <div class="figura1">
            <p>BÚSQUEDA DE JUGADORES</p>
        </div>

    </div>
    <div class="formulario">
        <form action="resultadoScouting.php" method="post">
            <div class="figura3">
                <p>DEPORTE</p>
            </div>

            <select name="deporte" id="deporte">
            <option value="" selected disabled></option>
            <option value="futbol">FÚTBOL</option>
            <option value="basketball">BASKETBALL</option>
            <option value="handball">HANDBALL</option>    
            </select>

            <div class="figura3">
                <p>NOMBRE</p>
            </div>

            <input class="nombre" type="text" id="nombre" name="nombre" minlength="2" onkeypress="return (event.charCode == 209 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">

            <div class="figura3">
                <p>APELLIDO</p>
            </div>

            <input class="apellido" type="text" id="apellido" name="apellido" minlength="2" onkeypress="return (event.charCode == 209 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">

            <div class="figura3">
                <p>EDAD</p>
            </div>
            
            <p>entre</p>
            <input id="edad1" type="number" name="edad1" min="1">
            <p>y</p>
            <input id="edad2" type="number" name="edad2" min="1">

            <div class="figura3">
                <p>EQUIPO</p>
            </div>

            <select name="equipo" id="equipo">
            <option value="" selected disabled></option>
            <option value="equipo1">EQUIPO 1</option>
            <option value="equipo2">EQUIPO 2</option>
            <option value="equipo3">EQUIPO 3</option>    
            </select>

            <div class="figura3">
                <p>POSICIÓN</p>
            </div>

            <select name="posicion" id="posicion">
            <option value="" selected disabled></option>
            <option value="equipo4">GOLERO</option>
            <option value="equipo5">DEFENSA</option>
            <option value="equipo6">MEDIOCAMPISTA</option>   
            <option value="equipo6">ATACANTE</option>  
            </select>

            <div class="figura3">
                <p>ORDENAR POR</p>
            </div>
            <div class="checkbox">
            <input id="goles" type="checkbox" name="valor" value="goles">GOLES</div>
            <div class="checkbox">
            <input id="asistencias" type="checkbox" name="valor" value="asistencias">ASISTENCIAS </div>
            <div class="checkbox">
            <input id="partidosJugados" type="checkbox" name="valor" value="partidosJugados">PARTIDOS JUGADOS</div>


<p>*OBLIGATORIO</p><button onclick="show()" type="submit">BUSCAR</button> 
        </form>
        <script>
            function show(){
                alert("ESTA CARACTERÍSTICA NO SE ENCUENTRA DISPONIBLE!")
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