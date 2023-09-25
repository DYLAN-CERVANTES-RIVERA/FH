function frmLogin(e) {
    e.preventDefault();
    const usuario = document.getElementById("usuario");
    const clave = document.getElementById("pass");
    var base_url = document.getElementById("url_base").value; 
    if (usuario.value == "") {
        clave.classList.remove("is-invalid");
        usuario.classList.add("is-invalid");
        document.getElementById("salerta").classList.remove("d-none");
        document.getElementById("salerta").innerHTML = "Falta ingresar el usuario";
        usuario.focus();
    } else if (clave.value == "") {
        usuario.classList.remove("is-invalid");
        clave.classList.add("is-invalid");
        document.getElementById("salerta").classList.remove("d-none");
        document.getElementById("salerta").innerHTML = "Falta ingresar la contrase&ntilde;a";
        clave.focus();
    } else {
        const url = "./Login/validar";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        console.log(frm);
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                //const res = JSON.parse(this.responseText);     
                const res = this.responseText;      
                if (res == '"ok"') {
                    window.location = base_url+'/Inicio'; //lo manda al controlador de la pagina Inicio
                } else {
                    document.getElementById("salerta").classList.remove("d-none");
                    document.getElementById("salerta").innerHTML = res;
                }
            }
        }
    }
}
         


function mostrar_pass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
  x.type = "text";
  } else {
  x.type = "password";
  }
}