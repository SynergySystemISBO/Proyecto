token = localStorage.getItem("token")

const URLprefijo = 'http://sigd-frontend.localhost'
const URLprefijoAPI = 'http://sigd.localhost';
const URLActual = window.location.href;

const URLNoPermitidasSinToken = [URLprefijo + "/menu_usuario.html",];
const URLNoPermitidasConToken = [URLprefijo + "/login.html", URLprefijo + "/resetPassword.html"];


if (token != null) {

    VerificarQueNoRequieraToken();

    fetch(URLprefijoAPI + '/validateToken', {
        method: 'GET',
        headers: {
            'Authorization': token
        }
    })
        .then(res => res.json())
        .then(data => {
            if (data.success == "1") {
                jwt = parseJwt(token);
                localStorage.setItem("data", JSON.stringify(jwt['data']));

                templatesNavbar();

                if (document.getElementById('Jumbotron')) {
                    templatesJumbotron();
                }
            }
            else {
                localStorage.removeItem("token");
                if (localStorage.getItem('data') !== undefined && localStorage.getItem('data')) {
                    localStorage.removeItem("data");
                }
                window.location.replace(URLprefijo + "/index.html");
            }
        })
        .catch(err => {
            localStorage.removeItem("token");
            if (localStorage.getItem('data') !== undefined && localStorage.getItem('data')) {
                localStorage.removeItem("data");
            }
            window.location.replace(URLprefijo + "/index.html");
        })
}
else {
    VerificarSiRequiereToken();
}


/*****************************************************************
 * Desencriptar JWT
 *****************************************************************/
const parseJwt = (token) => {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    var jsonPayload = decodeURIComponent(window.atob(base64).split('').map(function (c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));

    return JSON.parse(jsonPayload);
}

/*****************************************************************
 * Si esta logueado cargar datos en el navbar y agregar botones en el sidebar
 *****************************************************************/
const templatesNavbar = () => {

    var template = Handlebars.templates['sidebar'];

    var dataUser = {
        Usuario: '<i class="fa fa-user"></i> ' + jwt['data'].nombre
    }

    var MenuUsuarioButton = {
        liMenuUsuario: '<a href="menu_usuario.html">Menu Usuario</a>'
    }

    var LogOutbutton = {
        liLogOut: '<a href="#" id="logoutButton">Cerrar sesión</a>'
    }

    $('#nomUsuario').html(template(dataUser));
    $('#nomUsuario').prop('href', 'perfil.html');
    $('#liMenuExtra').html(template(MenuUsuarioButton));
    $('#liLogout').html(template(LogOutbutton));

}

/*****************************************************************
 * CARGAR TEMPLATE JUMBOTRON
 *****************************************************************/
const templatesJumbotron = () => {

    var template = Handlebars.templates['jumbotron'];

    var data = {
        NombreUsuario: jwt['data'].nombre,
        ApellidoUsuario: jwt['data'].apellido,
        nombreRol: jwt['data'].rol,
    }

    $('#Jumbotron').html(template(data));

}

//Click boton deslogueo
$('#liLogout').click(function (e) {
   logout();
})


/****************************************
 * Evento sidebar
 ****************************************/
 $(document).ready(function () {
    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});



/*****************************
 * DESLOGUEO
 ****************************/
function logout(){
    if (localStorage.getItem('token') !== undefined && localStorage.getItem('token')) {
        localStorage.removeItem("token");
    }
    if (localStorage.getItem('data') !== undefined && localStorage.getItem('data')) {
        localStorage.removeItem("data");
    }
    window.location.replace(URLprefijo + "/index.html");
}
/*****************************************************************
 * ALERTAS
 *****************************************************************/
const alertManager = (typeMsg, message) => {
    const alert = document.querySelector('#alert');
    if($(alert).hasClass("error")){
        alert.classList.remove('error');
    }
    if($(alert).hasClass("success")){
        alert.classList.remove('success');
    }
    alert.innerHTML = message || 'Se produjo cambios';
    alert.classList.add(typeMsg);
    alert.style.display = 'block';

    setTimeout(() => {
        alert.style.display = 'none';
        alert.classList.remove(typeMsg);
    }, 3500);

}

/*****************************************************************
 * Verificar vistas a las cuales se puede acceder unicamente logueado
 *****************************************************************/
function VerificarSiRequiereToken() {
    if (URLNoPermitidasSinToken.find(element => element === URLActual)) {
        window.location.replace(URLprefijo + "/index.html");
    }
}
/*****************************************************************
 * Verificar en vistas a las cuales no se puede acceder logueado
 *****************************************************************/
function VerificarQueNoRequieraToken() {
    if (URLActual == URLprefijo + '/login.html') {
        window.location.replace(URLprefijo + "/index.html");
        throw 'No se puede ingresar a esta vista logueado';
    }
}

$('#nomUsuario').click(function (e) {
    e.preventDefault();
})