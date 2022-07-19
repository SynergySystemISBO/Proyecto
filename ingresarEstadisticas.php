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
                   <li><a href="homeEstadistico.php" style="color: #045D8C;">ESTADISTICO</a></li>
                   
                </ul>
           </nav>
        </div>
    </header>

    <div class="contenido" style="margin-top: 50px;">
        <div class="figura1">
            <p>Hola, NOMBRE ESTADISTICO</p>
        </div>
        <div class="figura2">
            <p> EQUIPO 1 vs EQUIPO 2</p>
        </div>
    </div>

    <div class="formularioPartido">
        <table>
            <tr> 
                <th></th>
                <th></th>
                <th><div class="equipo"><p>EQUIPO 1</p></div></th>
                <th></th>
                <th></th>
                <th><div class="equipo"><p>EQUIPO 2</p></div></th>
                <th></th>

            </tr>
            <tr> 
                <td><div class="eventos"><p>Resultado</p></div></td>
                <td></td>
                <td><div class="equipo"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>
                <td></td>
                <td><div class="equipo"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>

            </tr>
            <tr>
                <td><div class="eventos"><p>Goles</p></div></td>
                <td><div class="equipo"><p>-'</p></div></td>
                <td><div class="equipo"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>
                <td><div class="equipo"><p>-'</p></div></td>
                <td><div class="equipo"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>
            </tr>
            <tr>
                <td><div class="eventos"><p>Amonestados</p></div></td>
                <td><div class="equipo"><p>-'</p></div></td>
                <td><div class="equipo"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>
                <td><div class="equipo"><p>-'</p></div></td>
                <td><div class="equipo"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>
            </tr>
            <tr>
                <td><div class="eventos"><p>Expulsados</p></div></td>
                <td><div class="equipo"><p>-'</p></div></td>
                <td><div class="equipo"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>
                <td><div class="equipo"><p>-'</p></div></td>
                <td><div class="equipo"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>
                </tr>
            <tr>
                <td><div class="eventos"><p>Cambio</p></div></td>
                <td><div class="equipo"><p>-'</p></div></td>
                <td><div class="equipo" style="background-color: #277832;"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>
                <td><div class="equipo"><p>-'</p></div></td>
                <td><div class="equipo" style="background-color: #277832;"><p>-</p></div></td>
                <td><div class="editar"><button onclick="show()"><p>AGREGAR</p></button></div></td>   
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><div class="equipo" style="background-color: #7c1318; color: #ffffff;"><p>-</p></div></td>
                <td></td>
                <td></td>
                <td><div class="equipo" style="background-color: #7c1318; color: #ffffff;"><p>-</p></div></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>

        <div class="botonEnviar">
            <button onclick="enviar()"><p>ENVIAR</p></button>
        </div>
        
        <script>
        function show() {
            alert("AGREGAR");
          }

        function enviar() {
            alert("ESTADISTICAS ENVIADAS")
        }
        </script>

    <footer>
            <div class="piePagina">
                <nav class="pie">
                        <p>Desarrollado por Synergy System | <a href="https://www.SysergySystem.com.uy">www.SysergySystem.com.uy</a> | Contacto: 0800 1234</p>      
                </nav>
            </div>
        </footer>
</body>
</html>