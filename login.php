<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.I.G.D.</title>
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
    <header>
        <div class="header1">
            <p><a href="index.php">INICIO</a></p>
            <nav class="header2">
                <img class="logo" src="img/LOGO PAGINA.png" alt="LOGO" width="150px" height="150px">
            </nav>
         </div>
    </header>
    <div class="contenido">
        <a href="login.php">
            <div class="figura1">
                <p>INICIA SESIÓN</p>
            </div>
        </a>     
    </div>

    <div class="formulario">

        <form action="#" method="post">

            <div class="figura3">
                <p>CI</p>
            </div>

            <input class="ci" type="number" id="ci" name="ci" min="999999" max="99999999"  required placeholder="Ingresa tu ci sin el '-': ejemplo 54532841 ">

            <div class="figura3">
                <p>CONTRASEÑA</p>
            </div>

            <input class="contrasenia" type="password" id="contrasenia" required minlength="8" name="contrasenia">

            <button type="submit" onclick="show()">ACEPTAR</button>
            <a class="recuperacionContrasenia" href="#">Olvide mi contraseña</a>
        </form>
    </div>

    <script>
        function show(){
            alert("ESTA CARACTERÍSTICA NO ESTÁ DISPONIBLE")
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