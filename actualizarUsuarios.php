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
            <p>ACTUALIZAR USUARIOS</p>
        </div>      
    </div>
    <div class="buscador">
        <p>Buscador</p>
        <img class="lupa" src="img/lupa.png" alt="lupa" width="20px" height="20px">
    </div>
    <div class="formulario">
        <form action="" method="post">

            <div class="figura3">
                <p>NOMBRE</p>
            </div>

            <input class="nombre" type="text" id="nombre" name="nombre" required value="Emiliano">

            <div class="figura3">
                <p>APELLIDO</p>
            </div>

            <input class="apellido" type="text" id="apellido" name="apellido" required value="Ramirez">

            <div class="figura3">
                <p>CI</p>
            </div>

            <input class="ci" type="tel" id="ci" name="ci" maxlength="8" minlength="6" required placeholder="Ingresa tu ci sin el '-'" value="54532841">


            <div class="figura3">
                <p>CONTRASEÑA</p>
            </div>

            <input class="contrasenia" type="text" id="contrasenia" name="contrasenia" value="RamiEmi123" minlength="8" required>

            <div class="figura3">
                <p>EMAIL</p>
            </div>

            <input class="mail" type="text" id="mail" name="mail" value="emiramirez@gmail.com">

            <div class="figura3">
                <p>USUARIO</p>
            </div>

            <div class="radioButton"><input type="radio" name="rol" id="dt" checked><p>DT</p></div>
            <div class="radioButton"><input type="radio" name="rol" id="arbitro" ><p>ARBITRO</p></div>
            <div class="radioButton"><input type="radio" name="rol" id="estadistico"><p>ESTADISTICO</p></div>
            <div class="radioButton"><input type="radio" name="rol" id="scouting"><p>SCOUTING</p> </div>
            <div class="radioButton"><input type="radio" name="rol" id="admin"><p>ADMIN</p></div>
            
            <button type="submit" onclick="show()">ACTUALIZAR</button>
        </form>
    </div>
    </div>
            <script>
                function show(){
                    alert("HEMOS ACTUALIZADO EL USUARIO")
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