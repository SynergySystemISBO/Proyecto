<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAdmin.css">
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
            <p></p>
        </div>      
    </div>

    <div class="encabezado" style="margin-top: 20px;">

    <a href="#usuarios" style="text-decoration: none; color:black; margin-right: 5px;">
        <div class="botonEncabezado1" style="margin-top: 10px;">
            <p style="font-weight: 600;">USUARIOS</p>
        </div>
    </a>
    <a href="#deportes" style="text-decoration: none; color:black">
    <div class="botonEncabezado">
        <p style="font-weight: 600;">DEPORTES</p>
    </div>
    </a>
    <a href="#partidos" style="text-decoration: none; color:black">
        <div class="botonEncabezado">
            <p style="font-weight: 600;">PARTIDOS</p>
        </div>
    </a>
    <a href="#competencias" style="text-decoration: none; color:black">
    <div class="botonEncabezado">
        <p style="font-weight: 600;">COMPETENCIAS</p>
    </div>
    </a>
    <a href="#jugadores" style="text-decoration: none; color:black">
    <div class="botonEncabezado">
        <p style="font-weight: 600;">JUGADORES</p>
    </div>
    </a>
    </div>

    <div class="slider">
        <br><br><br><br><br><br><br>
        <ul>
            <li id="usuarios">
                <a href="registrarUsuarios.php" style="text-decoration: none;"><div class="contenedor"><p>REGISTRAR USUARIOS</p></div></a>
                <a href="actualizarUsuarios.php" style="text-decoration: none;"><div class="contenedor"><p>ACTUALIZAR USUARIOS</p></div></a>
                <a href="eliminarUsuarios.php" style="text-decoration: none;"><div class="contenedor"><p>ELIMINAR USUARIOS</p></div></a>
            </li>
            <li id="deportes">
                <a href="crearDeporte.php" style="text-decoration: none;"><div class="contenedor"><p>CREAR DEPORTE</p></div></a>
                <a href="modificarDeporte.php" style="text-decoration: none;"><div class="contenedor"><p>MODIFICAR DEPORTE</p></div></a>
                <a href="eliminarDeporte.php" style="text-decoration: none;"><div class="contenedor"><p>ELIMINAR DEPORTE</p></div></a>
            </li>
            <li id="partidos">
                <a href="crearPartidos.php" style="text-decoration: none;"><div class="contenedor"><p>CREAR PARTIDOS</p></div></a>
                <a href="modificarPartidos.php" style="text-decoration: none;"><div class="contenedor"><p>MODIFICAR PARTIDOS</p></div></a>
                <a href="eliminarPartidos.php" style="text-decoration: none;"><div class="contenedor"><p>ELIMINAR PARTIDOS</p></div></a>
            </li>
            <li id="competencias">
                <a href="crearCompetencia.php" style="text-decoration: none;"><div class="contenedor"><p>CREAR COMPETENCIAS</p></div></a>
                <a href="actualizarCompetencia.php" style="text-decoration: none;"><div class="contenedor"><p>ACTUALIZAR COMPETENCIA</p></div></a>
                <a href="eliminarCompetencia.php" style="text-decoration: none;"><div class="contenedor"><p>ELIMINAR COMPETENCIA</p></div></a>
            </li>
            <li id="jugadores">
                <a href="crearJugador.php" style="text-decoration: none;"><div class="contenedor"><p>CREAR JUGADOR</p></div></a>
                <a href="actualizarJugador.php" style="text-decoration: none;"><div class="contenedor"><p>ACTUALIZAR JUGADOR</p></div></a>
                <a href="eliminarJugador.php" style="text-decoration: none;"><div class="contenedor"><p>ELIMINAR JUGADOR</p></div></a>
            </li>
        </ul>
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