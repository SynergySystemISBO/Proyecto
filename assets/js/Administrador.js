let barraDeBusqueda = '';
const dataToken = JSON.parse(localStorage.getItem('data'));

$(document).ready(function () {
    switch (dataToken['rol']) {
        case 'Administrativo':
            var template = Handlebars.templates['navbarAdmin'];

            $('#navbarOpciones').html(template());
            break;
    }

    $('#navCreateUser').click(function (e) {
        e.preventDefault();
        var template = Handlebars.templates['createuserform'];

        $('#containerFormulario').html(template());
    })


    $('#navUpdateUser').click(function (e) {
        e.preventDefault();
        var template = Handlebars.templates['getUserSearch'];

        barraDeBusqueda = 'update';

        $('#containerFormulario').html(template());
    })


    $('#navDeleteUser').click(function (e) {
        e.preventDefault();
        var template = Handlebars.templates['getUserSearch'];

        barraDeBusqueda = 'delete';

        $('#containerFormulario').html(template());
    })

    //Deportes

    $('#navCreateDeporte').click(function (e) {
        e.preventDefault();
        var template = Handlebars.templates['createDeporteForm'];

        $('#containerFormulario').html(template());
    })

    $('#navUpdateDeporte').click(function (e) {
        e.preventDefault();
        var template = Handlebars.templates['getDeporte'];

        barraDeBusqueda = 'update';

        $('#containerFormulario').html(template());
    })


    $('#navDeleteDeporte').click(function (e) {
        e.preventDefault();
        var template = Handlebars.templates['getDeporte'];

        barraDeBusqueda = 'delete';

        $('#containerFormulario').html(template());
    })

    //Jugadores
    $('#navCreateJugador').click(function (e) {
        e.preventDefault();
        var template = Handlebars.templates['createJugadorform'];

        $('#containerFormulario').html(template());
    })

    $('#navUpdateJugador').click(function (e) {
        e.preventDefault();
        var template = Handlebars.templates['getJugador'];

        barraDeBusqueda = 'update';

        $('#containerFormulario').html(template());
    })


    $('#navDeleteJugador').click(function (e) {
        e.preventDefault();
        var template = Handlebars.templates['getJugador'];

        barraDeBusqueda = 'delete';

        $('#containerFormulario').html(template());
    })

})

/***********************************************************
USUARIOS 
**************************************************************/
/***************************************************************
 * BUSCAR USUARIO
 *************************************************************/
$(document.body).on("submit", "#getUserForm", function (e) {
    //Formulario de registrar usuario
    e.preventDefault();
    var email = $('#inputGetUser').val();
    const validarEmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
    try {
        if (!validarEmail.test(email)) {
            throw 'Email no valido'
        }
        fetch(URLprefijoAPI + '/getUser/' + email, {
            method: 'GET',
            headers: {
                Authorization: token,
            }
        })
            .then(res => res.json())
            .then(data => {
                if (data.success == "1") {
                    alertManager('success', data.mensaje);
                    this.reset();


                    var template = Handlebars.templates[barraDeBusqueda + 'userform'];

                    jwtUser = parseJwt(data.data);

                    let dataUser = {
                        valueEmail: jwtUser['data'].email,
                        valueNombre: jwtUser['data'].nombre,
                        valueApellido: jwtUser['data'].apellido,
                        valueSelect: jwtUser['data'].rol,
                        valueID: jwtUser['data'].id,
                    };

                    window.Handlebars.registerHelper('select', function (value, options) {
                        var $el = $('<select />').html(options.fn(this));
                        $el.find('[value="' + value + '"]').attr({ 'selected': 'selected' });
                        return $el.html();
                    });
                    if ($('#' + barraDeBusqueda + 'UserForm').length) {
                        $('#' + barraDeBusqueda + 'UserForm').remove();
                        $('#containerFormulario').append(template(dataUser));
                    }
                    else {
                        $('#containerFormulario').append(template(dataUser));
                    }
                }
                else {
                    $('#getUserSubmitButton').prop('disabled', true);
                    alertManager('error', data.mensaje);
                    setTimeout(() => {
                        $('#getUserSubmitButton').prop('disabled', false);
                    }, 3500);
                }
            })
            .catch(err => {
                $('#getUserSubmitButton').prop('disabled', true);
                alertManager('error', data.mensaje);
                setTimeout(() => {
                    $('#getUserSubmitButton').prop('disabled', false);
                }, 3500);
            })
    }
    catch (e) {
        $('#getUserSubmitButton').prop('disabled', true);
        alertManager('error', e);
        setTimeout(() => {
            $('#getUserSubmitButton').prop('disabled', false);
        }, 3500);
    }
})
/***************************************************************
 * CREAR USUARIO
 *************************************************************/
$(document.body).on("submit", "#createUserForm", function (e) {
    e.preventDefault();
    var email = $('#inputCreateEmailUser').val();
    var password = $('#inputCreatePasswordUser').val();
    var nombre = $('#inputCreateNameUser').val();
    var apellido = $('#inputCreateApellidoUser').val();
    var rol = $('select[name=selectCreateRol] option').filter(':selected').val();


    const validarEmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
    const validarPassword = /^(?=.{5,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W])/
    try {
        if (!validarEmail.test(email)) {
            throw 'Email no valido'
        }

        if (!validarPassword.test(password) || (password.length < 8)) {
            throw 'Contraseña no valida';
        }

        if (nombre === null) {
            throw 'Se debe ingresar un nombre';
        }

        if (apellido === null) {
            throw 'Se debe ingresar un apellido';
        }

        if (rol === null) {
            throw 'Se debe ingresar un rol';
        }

        var formData = new FormData();
        formData.append('nombre', nombre);
        formData.append('apellido', apellido);
        formData.append('email', email);
        formData.append('password', password);
        formData.append('rol', rol);

        fetch(URLprefijoAPI + '/admin/createUser', {
            method: 'POST',
            body: formData,
            headers: {
                'Authorization': token,
            }
        })
            .then(res => res.json())
            .then(data => {
                if (data.success == "1") {
                    alertManager('success', data.mensaje);
                    // this.reset();
                }
                else {
                    alertManager('error', data.mensaje);
                }
            })
            .catch(err => {
                alertManager('error', data.mensaje);
            })

    }
    catch (e) {
        $('#createUserSubmitButton').prop('disabled', true);
        alertManager('error', e);
        setTimeout(() => {
            $('#createUserSubmitButton').prop('disabled', false);
        }, 3500);
    }
})

/***************************************************************
 * MODIFICAR USUARIO
 *************************************************************/
$(document.body).on("submit", "#updateUserForm", function (e) {
    e.preventDefault();
    var id = $('#inputIDUser').val();
    var email = $('#inputUpdateEmailUser').val();
    var nombre = $('#inputUpdateNameUser').val();
    var apellido = $('#inputUpdateApellidoUser').val();
    var rol = $('select[name=selectUpdateRol] option').filter(':selected').val();

    const validarEmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

    try {
        if (isNaN(id)) {
            throw 'Se modifico el id'
        }

        if (!validarEmail.test(email)) {
            throw 'Email no valido'
        }

        if (nombre === null) {
            throw 'Se debe ingresar un nombre';
        }

        if (apellido === null) {
            throw 'Se debe ingresar un apellido';
        }

        if (rol === null) {
            throw 'Se debe ingresar un rol';
        }

        var formData = new FormData();
        formData.append('id', id);
        formData.append('nombre', nombre);
        formData.append('apellido', apellido);
        formData.append('email', email);
        formData.append('rol', rol);

        fetch(URLprefijoAPI + '/admin/updateUser', {
            method: 'POST',
            body: formData,
            headers: {
                'Authorization': token,
            }
        })
            .then(res => res.json())
            .then(data => {
                if (data.success == "1") {
                    alertManager('success', data.mensaje);
                    $('#updateUserForm').remove();

                    if (id === dataToken['id']) {
                        logout();
                    }
                }
                else {
                    alertManager('error', data.mensaje);
                }
            })
            .catch(err => {
                alertManager('error', data.mensaje);
            })

    }
    catch (e) {
        $('#updateUserSubmitButton').prop('disabled', true);
        alertManager('error', e);
        setTimeout(() => {
            $('#updateUserSubmitButton').prop('disabled', false);
        }, 3500);
    }
})

/***********************************************
 * ELIMINAR USUARIO
 ***********************************************/
$(document.body).on("click", "#buttonDeleteUser", function (e) {
    e.preventDefault();
    var id = $('#inputIDUser').val();

    try {
        if (isNaN(id)) {
            throw 'Se modifico el id'
        }

        if (id === dataToken['id']) {
            throw 'No puedes eliminar tu usuario';
        }

        fetch(URLprefijoAPI + '/admin/deleteUser/' + id, {
            method: 'DELETE',
            headers: {
                'Authorization': token,
            }
        })
            .then(res => res.json())
            .then(data => {
                if (data.success == "1") {
                    alertManager('success', data.mensaje);
                    $('#deleteUserForm').remove();
                    $('#deleteModal').modal('hide')
                }
                else {
                    alertManager('error', data.mensaje);
                }
            })
            .catch(err => {
                alertManager('error', data.mensaje);
            })

    }
    catch (e) {
        alertManager('error', e);
        $('#deleteModal').modal('hide')
    }
})



/**************************************************************
 * CRUD DEPORTES
 **************************************************************/

/*********************************************************************
 * Agregar posiciones a la tabla
 ********************************************************************/
 $(document.body).on('click', '#buttonAgregarPosicion', function () {
    let posicion = $('#inputPosicion').val();

    if (!posicion) {
        alertManager('error', 'No se ingreso el nombre de la posición');
    }
    else {
        let filas = $('#tablaPosiciones').find('tbody tr').length;

        if (filas === 0) {
            let html = '<tr id="trPosicion0"> <td>0</td> <td>' + posicion + '</td><td><button type="button" class="btn btn-outline-danger float-right btnsEliminarPosicion" id="buttonEliminar-0">Eliminar</button></td> </tr>'
            $('#items').append(html);
        }
        else {
            let filas = parseInt($('tbody tr:last td:first').html());
            filas = filas + 1;
            let html = '<tr id="trPosicion' + filas + '"> <td>' + filas + '</td> <td>' + posicion + '</td><td><button type="button" class="btn btn-outline-danger float-right btnsEliminarPosicion" id="buttonEliminar-' + filas + '">Eliminar</button></td> </tr>'
            $('#items').append(html);
        }

        $('#footerPosiciones').hide();
    }
})
/*********************************************************************
 * Eliminar posiciones a la tabla
 ********************************************************************/
$(document.body).on('click', '.btnsEliminarPosicion', function () {
    let idBoton = $(this).prop('id');

    let id = idBoton.split('-')[1];

    $("#trPosicion" + id).remove();

    if($('#tablaPosiciones').find('tbody tr').length === 0){
        $('#footerPosiciones').show();
    }
})

/*********************************************************************
 * Agregar incidencias a la tabla
 ********************************************************************/

$(document.body).on('click', '#buttonAgregarIncidencia', function () {
    let NomIncdencia = $('#inputNombreIncidencia').val();
    let TipoIncdencia = $('#inputTipoIncidencia').val();

    if (!NomIncdencia) {
        alertManager('error', 'No se ingreso el nombre de la incidencia');
    }
    if (!TipoIncdencia) {
        alertManager('error', 'No se ingreso el tipo de la incidencia');
    }
    else {
        let filas = $('#tablaIncidencias').find('tbody tr').length;

        if (filas === 0) {
            let html = '<tr id="trIncidencia0"> <td>0</td> <td>' + NomIncdencia + '</td><td>'+TipoIncdencia+'</td><td><button type="button" class="btn btn-outline-danger float-right btnsEliminarIncidencia" id="buttonEliminarIncidencia-0">Eliminar</button></td> </tr>'
            $('#itemsIncidencia').append(html);
        }
        else {
            let filas = parseInt($('tbody tr:last td:first').html());
            filas = filas + 1;
            let html = '<tr id="trIncidencia' + filas + '"> <td>' + filas + '</td> <td>' + NomIncdencia + '</td><td>'+TipoIncdencia+'</td><td><button type="button" class="btn btn-outline-danger float-right btnsEliminarIncidencia" id="buttonEliminarIncidencia-'+filas+'">Eliminar</button></td></tr>'
            $('#itemsIncidencia').append(html);
        }

        $('#footerIncidencias').hide();
    }
})
/*********************************************************************
 * Eliminar incidencias de la tabla
 ********************************************************************/
$(document.body).on('click', '.btnsEliminarIncidencia', function () {
    let idBoton = $(this).prop('id');

    let id = idBoton.split('-')[1];

    $("#trIncidencia" + id).remove();

    if($('#tablaIncidencias').find('tbody tr').length === 0){
        $('#footerIncidencias').show();
    }
})