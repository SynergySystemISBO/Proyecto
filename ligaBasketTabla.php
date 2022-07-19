<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesLigaFutbolTabla.css">
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
                   <li><a href="homeFutbol.php">FÚTBOL</a> </li>
                   <li><a href="homeBasketball.php" style="color: #045D8C;">BASKETBALL</a></li>
                   <li><a href="homeHandball.php">HANDBALL</a></li>
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
        <a href="ligaBasketballTabla.php" style="text-decoration:none; color:black">
            <div class="figura2">
                <p>Tabla de posiciones</p>
            </div>
        </a>
        <a href="ligaBasketballEstadisticas.php" style="text-decoration:none; color:black"> 
            <div class="figura3">
                <p>Estadísticas</p>
            </div>
        </a>
    </div>
        <div class="tabla">
        <table>
            <tr> 
                <th><div class="equipos"><p>EQUIPOS</p></div></th>
                <th><div class="e-item"><p>PJ</p></div></th>
                <th><div class="e-item"><p>PG</p></div></th>
                <th><div class="e-item"><p>PP</p></div></th>
                <th><div class="e-dif"><p>DIF</p></div></th>
                <th><div class="e-ult-p"><p>ULT-P</p></div></th>
                <th><div class="e-pts"><p>PTS</p></div></th>
            </tr>

            <tr>
                <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Equipo 1</p></div></td>
                <td><div class="item1"><p>4</p></div></td>
                <td><div class="item"><p>8</p></div></td>
                <td><div class="item"><p>1</p></div></td>
                <td><div class="dif"><p>7</p></div></td>
                <td><div class="ult-p"><p>4-0-0</p></div></td>
                <td><div class="pts"><p>12</p></div></td>
            </tr>

            <tr>
                <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Equipo 2</p></div></td>
                <td><div class="item1"><p>4</p></div></td>
                <td><div class="item"><p>6</p></div></td>
                <td><div class="item"><p>4</p></div></td>
                <td><div class="dif"><p>2</p></div></td>
                <td><div class="ult-p"><p>3-0-1</p></div></td>
                <td><div class="pts"><p>9</p></div></td>
            </tr>

            <tr>
                <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Equipo 3</p></div></td>
                <td><div class="item1"><p>4</p></div></td>
                <td><div class="item"><p>5</p></div></td>
                <td><div class="item"><p>3</p></div></td>
                <td><div class="dif"><p>2</p></div></td>
                <td><div class="ult-p"><p>2-1-1</p></div></td>
                <td><div class="pts"><p>7</p></div></td>
            </tr>

            <tr>
                <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Equipo 4</p></div></td>
                <td><div class="item1"><p>4</p></div></td>
                <td><div class="item"><p>5</p></div></td>
                <td><div class="item"><p>3</p></div></td>
                <td><div class="dif"><p>2</p></div></td>
                <td><div class="ult-p"><p>2-0-2</p></div></td>
                <td><div class="pts"><p>7</p></div></td>
            </tr>

            <tr>
                <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Equipo 5</p></div></td>
                <td><div class="item1"><p>4</p></div></td>
                <td><div class="item"><p>4</p></div></td>
                <td><div class="item"><p>4</p></div></td>
                <td><div class="dif"><p>0</p></div></td>
                <td><div class="ult-p"><p>1-1-2</p></div></td>
                <td><div class="pts"><p>4</p></div></td>
            </tr>

            <tr>
                <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Equipo 5</p></div></td>
                <td><div class="item1"><p>3</p></div></td>
                <td><div class="item"><p>2</p></div></td>
                <td><div class="item"><p>2</p></div></td>
                <td><div class="dif"><p>0</p></div></td>
                <td><div class="ult-p"><p>1-1-1</p></div></td>
                <td><div class="pts"><p>4</p></div></td>
            </tr>

            <tr>
                <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Equipo 7</p></div></td>
                <td><div class="item1"><p>4</p></div></td>
                <td><div class="item"><p>2</p></div></td>
                <td><div class="item"><p>7</p></div></td>
                <td><div class="dif"><p>-5</p></div></td>
                <td><div class="ult-p"><p>0-1-3</p></div></td>
                <td><div class="pts"><p>1</p></div></td>
            </tr>

            <tr>
                <td><div class="escudos"><img src="img/escudo.png" alt="escudo" width="30px"></div><div class="equipo"><p>Equipo 8</p></div></td>
                <td><div class="item1"><p>3</p></div></td>
                <td><div class="item"><p>1</p></div></td>
                <td><div class="item"><p>8</p></div></td>
                <td><div class="dif"><p>-7</p></div></td>
                <td><div class="ult-p"><p>0-0-3</p></div></td>
                <td><div class="pts"><p>0</p></div></td>
            </tr>
        </table>
        <p class="pieTabla">PJ - partidos jugados | PG - partidos ganados | PP - partidos perdidos | <br>
         DIF - diferencia de goles | ULT. P - resultados ultimos 5 partidos </p>
        </div>
        <div class="encabezadoFixture">
            <p>FIXTURE</p>
        </div>
        <div class="fixture" >
            <br>
            <ul class="slider">
                <li id="fecha1">
                <div class="fecha1">
                    <p>FECHA 1</p>
                </div>
                <p>Equipo 1 vs Equipo 2</p>
                <p>Equipo 3 vs Equipo 4</p>
                <p>Equipo 5 vs Equipo 6</p>
                <p>Equipo 7 vs Equipo 8</p>
                <div class="flechas">
                    <a href="#fecha1"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha2"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                </div>
                </li>
                <li id="fecha2">
                    <div class="fecha2">
                        <p>FECHA 2</p>
                    </div>
                    <p>Equipo 1 vs Equipo 3</p>
                    <p>Equipo 2 vs Equipo 4</p>
                    <p>Equipo 5 vs Equipo 7</p>
                    <p>Equipo 6 vs Equipo 8</p>
                    <div class="flechas">
                        <a href="#fecha1"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha3"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                    </div>
                    </li>
                    <li id="fecha3">
                <div class="fecha3">
                    <p>FECHA 3</p>
                </div>
                <p>Equipo 1 vs Equipo 4</p>
                <p>Equipo 3 vs Equipo 2</p>
                <p>Equipo 5 vs Equipo 8</p>
                <p>Equipo 7 vs Equipo 6</p>
                <div class="flechas">
                    <a href="#fecha2"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha4"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                </div>
                </li>
                <li id="fecha4">
                    <div class="fecha2">
                        <p>FECHA 4</p>
                    </div>
                    <p>Equipo 1 vs Equipo 2</p>
                    <p>Equipo 3 vs Equipo 4</p>
                    <p>Equipo 5 vs Equipo 6</p>
                    <p>Equipo 7 vs Equipo 8</p>
                    <div class="flechas">
                        <a href="#fecha3"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha5"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                    </div>
                    </li>
                    <li id="fecha5">
                        <div class="fecha2">
                            <p>FECHA 5</p>
                        </div>
                        <p>Equipo 1 vs Equipo 3</p>
                        <p>Equipo 2 vs Equipo 4</p>
                        <p>Equipo 5 vs Equipo 7</p>
                        <p>Equipo 6 vs Equipo 8</p>
                        <div class="flechas">
                            <a href="#fecha4"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha6"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                        </div>
                        </li>
                        <li id="fecha6">
                    <div class="fecha3">
                        <p>FECHA 6</p>
                    </div>
                    <p>Equipo 1 vs Equipo 4</p>
                    <p>Equipo 3 vs Equipo 2</p>
                    <p>Equipo 5 vs Equipo 8</p>
                    <p>Equipo 7 vs Equipo 6</p>
                    <div class="flechas">
                        <a href="#fecha5"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha7"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                    </div>
                    </li>
                    <li id="fecha7">
                        <div class="fecha2">
                            <p>FECHA 7</p>
                        </div>
                        <p>Equipo 1 vs Equipo 3</p>
                        <p>Equipo 2 vs Equipo 4</p>
                        <p>Equipo 5 vs Equipo 7</p>
                        <p>Equipo 6 vs Equipo 8</p>
                        <div class="flechas">
                            <a href="#fecha6"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha7"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                        </div>
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