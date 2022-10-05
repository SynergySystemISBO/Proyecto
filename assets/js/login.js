token = sessionStorage.getItem("token")

$(document).ready(function () {
    $('#loginForm').submit(function (e) {
      e.preventDefault();
      let correo = $('#inputEmail').val();
      let password = $('#inputPassword').val();
      let data = { email: correo, password: password };
      $.ajax({
        type: "POST",
        url: 'http://localhost/Backend/login',
        data: data,
        success: function (response) {
          var jsonData = JSON.parse(response);
          if (jsonData.success == "1") {
            sessionStorage.setItem("token", jsonData.token);
            sessionStorage.setItem("data", JSON.stringify(jsonData['data']));
            alertManager('success', jsonData.mensaje);
            setTimeout(() => {
              window.location.replace("http://localhost/Frontend/index.html");
            }, "2000")
          }
          else {
            alertManager('error', jsonData.mensaje);
          }
        }
      });
    });
  });