let barraDeBusqueda = '';
const dataToken = JSON.parse(sessionStorage.getItem('data'));

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
})
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
                    this.reset();
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

                    if(id === dataToken['id']){
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

        if(id === data['id']){
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