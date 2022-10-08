token = localStorage.getItem("token")

$(document).ready(function () {
  $('#loginForm').submit(function (e) {
    e.preventDefault();
    let correo = $('#inputEmail').val();
    let password = $('#inputPassword').val();
    let data = { email: correo, password: password };
    $.ajax({
      type: "POST",
      url: URLprefijoAPI + '/login',
      data: data,
      success: function (response) {
        var jsonData = JSON.parse(response);
        if (jsonData.success == "1") {
          localStorage.setItem("token", jsonData.token);
          localStorage.setItem("data", JSON.stringify(jsonData['data']));
          alertManager('success', jsonData.mensaje);
          setTimeout(() => {
            window.location.replace(URLprefijo + "/index.html");
          }, "2000")
        }
        else {
          alertManager('error', jsonData.mensaje);
        }
      }
    });
  });


  $('#resetPasswordForm').submit(function (e) {
    e.preventDefault();
    let correo = $('#inputEmailReset').val();
    fetch(URLprefijoAPI + '/requestResetPassword/' + correo, {
      method: 'GET',
    })
      .then(res => res.json())
      .then(data => {
        if (data.success == "1") {
          $('#requestPasswordModal').modal('hide');
          alertManager('success', data.mensaje);
        }
        else {
          $('#requestPasswordModal').modal('hide');
          alertManager('error', data.mensaje);
        }
      })
      .catch(err => {
        $('#requestPasswordModal').modal('hide');
        alertManager('error', err);
      })
  })
});