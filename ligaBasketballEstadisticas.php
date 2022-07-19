<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesLigaFutbolEstadisticas.css">
    <title>S.I.G.D.</title>
</head>
<body>
    <header>
        <div class="header1">
           <p><a href="login.php">INICIA SESIÓN</a></p>
           <nav class="header2">
               <img class="logo" src="img/LOGO PAGINA.png" alt="LOGO" width="150px" height="150px">
               <ul>
                   <li><a href="index.php">INICIO</a> </li>
                   <li><a href="homeFutbol.php" >FÚTBOL</a> </li>
                   <li><a href="homeBasketball.php" style="color: #045D8C;">BASKETBALL</a></li>
                   <li><a href="homeHandball.php" >HANDBALL</a></li>
                   <li><a href="homePolideportivo.php" hidden>POLIDEPORTIVO</a></li>
                   <li><a href="paginaEquipos.php">EQUIPOS</a></li>
                   <li><a href="paginaJugadores.php">JUGADORES</a></li>
                </ul>
           </nav>
        </div>
    </header>

    <div class="contenido">
        <div class="figura1">
            <p>LIGA EJEMPLO</p>
        </div>
        <a href="ligaBasketTabla.php" style="text-decoration:none; color:black">
            <div class="figura2" style="background-color: #ffffff; color: black;">
                <p>Tabla de posiciones</p>
            </div>
        </a>
        <a href="ligaBasketballEstadisticas.php" style="text-decoration:none; color:black"> 
            <div class="figura3" style="background-color: #045D8C; color: #ffffff;">
                <p>Estadísticas</p>
            </div>
        </a>
    </div>
<div class="encabezado" style="margin-top: 20px;">

    <a href="#goleadores" style="text-decoration: none; color:black; margin-right: 5px;">
        <div class="goleadores" style="margin-top: 10px;">
            <p style="font-weight: 600;">LIDERES ANOTACION</p>
        </div>
    </a>
    <a href="#asistidores" style="text-decoration: none; color:black; margin-right: 5px;">
    <div class="asistidores">
        <p style="font-weight: 600;">LIDERES ASISTENCIAS</p>
    </div>
    </a>
    <a href="#rebotes" style="text-decoration: none; color:black">
        <div class="asistidores">
            <p style="font-weight: 600;">LIDERES REBOTES</p>
        </div>
        </a>
</div>
        <div class="estadisticas">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <ul class="slider">
                <li id="goleadores">

                <div class="tabla">
                    <table>
                <tr> 
                    <th><div class="equipos"><p>JUGADOR</p></div></th>
                    <th><div class="e-item"><p>PUNTOS</p></div></th>
                </tr>

                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                <tr>
                    <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                    <td><div class="item1"><p>19</p></div></td>
                </tr>
                </table>

                </li>
                
                <li id="asistidores">
                    
                    <div class="tabla">
                        <table>
                    <tr> 
                        <th><div class="equipos"><p>JUGADOR</p></div></th>
                        <th><div class="e-item2"><p>ASISTENCIAS</p></div></th>
                    </tr>
    
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    <tr>
                        <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                        <td><div class="item2"><p>19</p></div></td>
                    </tr>
                    </table>
                    </li>

                    <li id="rebotes">
                    
                        <div class="tabla">
                            <table>
                        <tr> 
                            <th><div class="equipos"><p>JUGADOR</p></div></th>
                            <th><div class="e-item2"><p>REBOTES</p></div></th>
                        </tr>
        
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        <tr>
                            <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Luis SUAREZ</p></div></td>
                            <td><div class="item2"><p>19</p></div></td>
                        </tr>
                        </table>
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