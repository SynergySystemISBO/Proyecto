const token = qs('token');
const emailToken = parseJwt(token);
$(document).ready(function(){
    $('#emailSpan').text(emailToken['data'].email);
})


$('#updatePasswordForm').submit(function(e) {
    e.preventDefault();

    
    var password = $('#inputNewPassword').val();
    var password2 = $('#inputNewPassword2').val();

    const validarPassword = /^(?=.{5,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W])/

    try {

        if (!validarPassword.test(password) || (password.length < 8)) {
            throw 'Contraseña no valida';
        }

        if(password != password2){
            throw 'Las contraseñas deben coincidir';
        }


        var formData = new FormData();
        formData.append('email', emailToken['data'].email);
        formData.append('password', password);


        fetch(URLprefijoAPI + '/resetPassword', {
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


function qs(key) {
key = key.replace(/[*+?^$.\[\]{}()|\\\/]/g, "\\$&"); // escape RegEx meta chars
var match = location.search.match(new RegExp("[?&]"+key+"=([^&]+)(&|$)"));
return match && decodeURIComponent(match[1].replace(/\+/g, " "));
}