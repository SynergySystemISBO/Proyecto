<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleEstadistico.css">
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
                   <li><a href="homeDT.php" style="color: #045D8C;">ESTADISTICO</a></li>
                   
                </ul>
           </nav>
        </div>
    </header>

    <div class="contenido" style="margin-top: 150px;">
        <div class="figura1">
            <p>Hola, NOMBRE ESTADISTICO</p>
        </div>
        <div class="figura2">
            <p></p>
        </div>
    </div>

    <div class="partidos">
        <table>
            <tr>
                <th>
                    <div class="tituloTabla">
                        <p>Partidos</p>
                    </div>
                </th>
                <th>
                    <div class="tituloTabla">
                        <p>Deporte</p>
                    </div>
                </th>
                <th>
                    <div class="tituloTabla">
                        <p>Fecha</p>
                    </div>
                </th>
                <th>
                    <div class="tituloTabla">
                        <p>Hora</p>
                    </div>
                </th>
                <th>
                    <div class="tituloTabla"><p>Lugar</p></div>
                </th>
            </tr>
            <tr>
                <td>
                    <div class="partido">
                        <p>EQUIPO 1 vs EQUIPO 2</p>
                    </div>
                </td>
                <td>
                    <div class="partido"><p>Fútbol</p></div>
                </td>
                <td>
                    <div class="partido"><p>25/09/2022</p></div>
                </td>
                <td>
                    <div class="partido"><p>19:30</p></div>
                </td>
                <td>
                    <div class="partido"><p>Estadio Gran Parque Central</p></div>
                </td>
                <td>
                    <a href="ingresarEstadisticas.php"><div class="ingresar"><p>INGRESAR</p></div></a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="partido">
                        <p>EQUIPO 23 vs EQUIPO 5</p>
                    </div>
                </td>
                <td>
                    <div class="partido"><p>Fútbol</p></div>
                </td>
                <td>
                    <div class="partido"><p>29/09/2022</p></div>
                </td>
                <td>
                    <div class="partido"><p>19:30</p></div>
                </td>
                <td>
                    <div class="partido"><p>Estadio Gran Parque Central</p></div>
                </td>
                <td>
                    <a href="ingresarEstadisticas.php"><div class="ingresar"><p>INGRESAR</p></div></a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="partido">
                        <p>EQUIPO 325 vs EQUIPO 0</p>
                    </div>
                </td>
                <td>
                    <div class="partido"><p>Fútbol</p></div>
                </td>
                <td>
                    <div class="partido"><p>30/09/2022</p></div>
                </td>
                <td>
                    <div class="partido"><p>19:30</p></div>
                </td>
                <td>
                    <div class="partido"><p>Estadio Gran Parque Central</p></div>
                </td>
                <td>
                    <a href="ingresarEstadisticas.php"><div class="ingresar"><p>INGRESAR</p></div></a>
                </td>
            </tr>
        </table>
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