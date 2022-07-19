<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAdminCompetencias.css">
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
            <p style="font-size: 18px;">ACTUALIZAR COMPETENCIA</p>
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
                <p>NOMBRE</p>
            </div>

            <input type="text" name="nombreLiga" id="nombreLiga" minlength="5" required value="LIGA UTU ISBO">

            <div class="figura3">
                <p>EQUIPO</p>
            </div>

            <input name="equipo" id="equipo" minlength="4" required>
            <button onclick="crearEquipo()" style="width: 100px; font-size: 16px; margin: 20px auto;">AGREGAR EQUIPO</button>    

            <div class="figura3">
                <p>EQUIPO</p>
            </div>

            <input name="equipo" id="equipo" minlength="4" required>
            <button onclick="crearEquipo()" style="width: 100px; font-size: 16px; margin: 20px auto;">BORRAR EQUIPO</button>
            <button onclick="show()" type="submit" style="margin-top: 10px;">ACTUALIZAR</button>
        </form>
        <script>
            function show(){
                alert("LIGA ACTUALIZADA")
            }
            function crearEquipo(){
                alert("EQUIPO AGREGADO")
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