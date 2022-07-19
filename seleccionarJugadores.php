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
    <div class="fixture">
        <br>
        <ul>
            <li id="fecha1">
            <div class="fecha1">
                <p>FECHA 1</p>
            </div>
            <p>Equipo 1 vs Equipo 6</p>
            </li>
        </ul>
    </div>


    <div class="tabla">
        <form action="" method="post">
        <table>
    <tr> 
        <th><div class="e-jugador"><p>JUGADORES DISPONIBLES</p></div></th>
        <th><div class="e-item2"><p></p></div></th>
    </tr>

    <tr>
        <td><div class="posicion"><p>G</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2">
            <input type="checkbox" name="seleccion" id="seleccion">
        </div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>G</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>D</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>D</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>D</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>M</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>M</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>D</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>A</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>A</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>A</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>A</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><div class="posicion"><p>A</p></div><div class="jugador"><p>JUGADOR</p></div></td>
        <td><div class="item2"><input type="checkbox" name="seleccion" id="seleccion"></div></td>
    </tr>
    <tr>
        <td><button class="enviar" type="submit" onclick="show()">ENVIAR JUGADORES</button></td>
    </tr>
    <script>
        function show(){
            alert("JUGADORES ENVIADOS")
        }
    </script>
    </table>
        
    </form>
</div>

    <div class="jugadoresNoDisponibles">
        <table>
            <tr> 
                <th><div class="e-jugador"><p>JUGADORES NO DISPONIBLES</p></div></th>
                <th><div class="e-item2" style="background-color: #ffffff; width:auto"><p>MOTIVO</p></div></th>
            </tr>
        
            <tr>
                <td><div class="posicion"><p>G</p></div><div class="jugador"><p>JUGADOR</p></div></td>
                <td><div class="item2"><p>Expulsado</p></div></td>
            </tr>
            <tr>
                <td><div class="posicion"><p>G</p></div><div class="jugador"><p>JUGADOR</p></div></td>
                <td><div class="item2"><p>5 amarillas</p></div></td>
            </tr>
            <tr>
                <td><div class="posicion"><p>D</p></div><div class="jugador"><p>JUGADOR</p></div></td>
                <td><div class="item2"><p>5 amarillas</p></div></td>
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