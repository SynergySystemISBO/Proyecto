<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleDT.css">
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
                   <li><a href="homeBasketball.php">BASKETBALL</a></li>
                   <li><a href="homeHandball.php">HANDBALL</a></li>
                   <li><a href="homePolideportivo.php" hidden>POLIDEPORTIVO</a></li>
                   <li><a href="paginaEquipos.php">EQUIPOS</a></li>
                   <li><a href="paginaJugadores.php">JUGADORES</a></li>
                   <li><a href="homeDT.php" style="color: #045D8C;">DT</a></li>
                   
                </ul>
           </nav>
        </div>
    </header>

    <div class="contenido">
        <div class="figura1">
            <p>Hola, NOMBRE DT</p>
        </div>
        <div class="figura2">
            <p>NOMBRE EQUIPO</p>
        </div>
    </div>
    <br>
    <img class="escudo" src="img/escudo.png" alt="Escudo" width="200px">

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
            <p>Equipo 1 vs Equipo 6</p>
            <div class="flechas">
                <a href="#fecha1"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha2"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
            </div>
            </li>
            <li id="fecha2">
                <div class="fecha2">
                    <p>FECHA 2</p>
                </div>
                <p>Equipo 1 vs Equipo 5</p>
                <div class="flechas">
                    <a href="#fecha1"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha3"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                </div>
                </li>
                <li id="fecha3">
            <div class="fecha3">
                <p>FECHA 3</p>
            </div>
            <p>Equipo 1 vs Equipo 2</p>
            <div class="flechas">
                <a href="#fecha2"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha4"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
            </div>
            </li>
            <li id="fecha4">
                <div class="fecha2">
                    <p>FECHA 4</p>
                </div>
                <p>Equipo 1 vs Equipo 7</p>
                <div class="flechas">
                    <a href="#fecha3"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha5"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                </div>
                </li>
                <li id="fecha5">
                    <div class="fecha2">
                        <p>FECHA 5</p>
                    </div>
                    <p>Equipo 1 vs Equipo 8</p>
                    <div class="flechas">
                        <a href="#fecha4"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha6"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                    </div>
                    </li>
                    <li id="fecha6">
                <div class="fecha3">
                    <p>FECHA 6</p>
                </div>
                <p>Equipo 1 vs Equipo 4</p>
                <div class="flechas">
                    <a href="#fecha5"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha7"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                </div>
                </li>
                <li id="fecha7">
                    <div class="fecha2">
                        <p>FECHA 7</p>
                    </div>
                    <p>Equipo 1 vs Equipo 3</p>
                    <div class="flechas">
                        <a href="#fecha6"><img class="FlechaI" src="img/FlechaI.png" alt="Izq"></a><a href="#fecha7"><img class="FlechaD" src="img/FlechaD.png" alt="Der"></a>
                    </div>
                </li>
        </ul>
    </div>
    <div class="botonSeleccionar">
        <a href="seleccionarJugadores.php" style="text-decoration: none; color:#ffffff"><p>SELECCIONAR JUGADORES</p></a>
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