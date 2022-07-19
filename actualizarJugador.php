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
            <p>CREAR JUGADOR</p>
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

            <input class="nombre" type="text" id="nombre" name="nombre" minlength="2" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" value="Pedro">

            <div class="figura3">
                <p>APELLIDO</p>
            </div>

            <input class="apellido" type="text" id="apellido" name="apellido" required minlength="2" onkeypress="return (event.charCode == 209 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" value="Rodriguez">

            <div class="figura3">
                <p>CI</p>
            </div>

            <input class="ci" type="number" id="ci" name="ci" min="999999" max="99999999" required placeholder="Ingresa la ci sin el '-'" value="54532841">

            <div class="figura3">
                <p>FECHA DE NACIMIENTO</p>
            </div>

            <input class="fechaNac" type="date" id="fechaNac" name="fechaNac" minlength="8" required value="2000-01-01">

            <div class="figura3">
                <p>ALTURA</p>
            </div>
            
            <input class="altura" type="number" id="altura" required min="90" max="230" name="altura" placeholder="ej: 190" value="178">
            
            <div class="figura3">
                <p>DEPORTE</p>
            </div>
            
            <select name="deporte" id="deporte">
                <option value="" disabled></option>
                <option value="futbol" selected>FÚTBOL</option>
                <option value="basketball">BASKETBALL</option>
                <option value="handball">HANDBALL</option>    
            </select>

            <div class="figura3">
                <p>EQUIPO</p>
            </div>

            <input class="equipo" type="text" id="equipo" name="equipo" maxlength="30" required value="UTU ISBO 3ro BB">

            <div class="figura3">
                <p>POSICIÓN</p>
            </div>

            <div class="radioButton"><input type="radio" name="posicion" id="golero" checked><p>GOLERO</p></div>
            <div class="radioButton"><input type="radio" name="posicion" id="defensa"><p>DEFENSA</p></div>
            <div class="radioButton"><input type="radio" name="posicion" id="mediocampista"><p>MEDIOCAMPISTA</p></div>
            <div class="radioButton"><input type="radio" name="posicion" id="atacante"><p>ATACANTE</p></div>
            
            <button type="submit" onclick="show()" style="margin-top: 0;">ACTUALIZAR</button>
        </form>
    </div>
    </a>
    </div>
            <script>
                function show(){
                    alert("SE HA ACTUALIZADO EL JUGADOR")
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