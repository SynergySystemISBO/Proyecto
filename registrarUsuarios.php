<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAdminUsuario.css">
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
            <p>REGISTRAR USUARIOS</p>
        </div>      
    </div>
    <div class="formulario">
        <form action="" method="post">

            <div class="figura3">
                <p>NOMBRE</p>
            </div>

            <input class="nombre" type="text" id="nombre" name="nombre" required>

            <div class="figura3">
                <p>APELLIDO</p>
            </div>

            <input class="apellido" type="text" id="apellido" name="apellido" required>

            <div class="figura3">
                <p>CI</p>
            </div>

            <input class="ci" type="tel" id="ci" name="ci" maxlength="8" minlength="6" required placeholder="Ingresa la ci sin el '-'">

            <div class="figura3">
                <p>CONTRASEÑA</p>
            </div>

            <input class="contrasenia" type="password" id="contrasenia" name="contrasenia" minlength="8" required>

            <div class="figura3">
                <p>EMAIL</p>
            </div>

            <input class="mail" type="text" id="mail" name="mail">

            <div class="figura3">
                <p>USUARIO</p>
            </div>

            <div class="radioButton"><input type="radio" name="rol" id="dt"><p>DT</p></div>
            <div class="radioButton"><input type="radio" name="rol" id="arbitro"><p>ARBITRO</p></div>
            <div class="radioButton"><input type="radio" name="rol" id="estadistico"><p>ESTADISTICO</p></div>
            <div class="radioButton"><input type="radio" name="rol" id="scouting"><p>SCOUTING</p> </div>
            <div class="radioButton"><input type="radio" name="rol" id="admin"><p>ADMIN</p></div>
            
            <button type="submit" onclick="show()">ACEPTAR</button>
        </form>
    </div>
    </a>
    </div>
            <script>
                function show(){
                    alert("SE HA REGISTRADO EL USUARIO")
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