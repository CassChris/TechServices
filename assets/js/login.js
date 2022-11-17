const btnRegister = d.querySelector("#btnRegister");
const btnLogin = d.querySelector("#btnLogin");
const frmLogin = d.querySelector("#frmLogin");
const frmRegister = d.querySelector("#frmRegister");
const registrarse = d.querySelector("#registrarse");
const login = d.querySelector("#login");

// campos registro
const nombreRegistro = d.querySelector("#nombreRegistro");
const claveRegistro = d.querySelector("#claveRegistro");
const correoRegistro = d.querySelector("#correoRegistro");

// campos login
const correoLogin = d.querySelector("#correoLogin");
const claveLogin = d.querySelector("#claveLogin");



//modal login
const modalLogin = new bootstrap.Modal(document.getElementById('modalLogin'));

d.addEventListener("DOMContentLoaded", function () {
  btnRegister.addEventListener("click", function () {
    frmLogin.classList.add("d-none");
    frmRegister.classList.remove("d-none");
  });

  btnLogin.addEventListener("click", function () {
    frmRegister.classList.add("d-none");
    frmLogin.classList.remove("d-none");
  });
  //registro
  registrarse.addEventListener("click", function () {
    if (
      nombreRegistro.value == "" ||
      correoRegistro.value == "" ||
      claveRegistro.value == ""
    ) {
      Swal.fire("Aviso", "TODO LOS CAMPOS SON REQUERIDOS", "warning");
    } else {
      let formData = new FormData();
      formData.append("nombre", nombreRegistro.value);
      formData.append("clave", claveRegistro.value);
      formData.append("correo", correoRegistro.value);

      const url = base_url + "clientes/registroDirecto";
      const http = new XMLHttpRequest();
      http.open("POST", url, true);
      http.send(formData);
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
          Swal.fire("Aviso", res.msg, res.icono);
          if (res.icono == "success") {
            setTimeout(() => {
              enviarCorreo(correoRegistro.value, res.token);
            }, 2000);
          }
        }
      }
    }
  });
  // login directo
  login.addEventListener("click", function () {
    if (

      correoLogin.value == "" ||
      claveLogin.value == ""
    ) {
      Swal.fire("Aviso", "TODO LOS CAMPOS SON REQUERIDOS", "warning");
    } else {
      let formData = new FormData();
      formData.append("correoLogin", correoLogin.value);
      formData.append("claveLogin", claveLogin.value);

      const url = base_url + "clientes/loginDirecto";
      const http = new XMLHttpRequest();
      http.open("POST", url, true);
      http.send(formData);
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
          Swal.fire("Aviso", res.msg, res.icono);
          if (res.icono == "success") {
            setTimeout(() => {
              window.location.reload();
            }, 2000);        
          }
        }
      }
    }
  });

  

});

function enviarCorreo(correo, token) {
  let formData = new FormData();
  formData.append("token", token);
  formData.append("correo", correo);  
  const url = base_url + "clientes/enviarCorreo";
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(formData);
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      Swal.fire("Aviso", res.msg, res.icono);
      if ((res.icono = "success")) {
        setTimeout(() => {
          window.location.reload();
        }, 2000);
      }
    }
  };
}

function abrirModalLogin() {
  myModal.hide();
  modalLogin.show();
  
}
