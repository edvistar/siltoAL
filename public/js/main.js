const items = document.querySelectorAll(".bEliminar");
items.forEach(item => {
    item.addEventListener("click", function(){
        const id = this.dataset.id;
        const controlador = this.dataset.controlador;
        const accion=this.dataset.accion;

        const confirm = window.confirm("¿Desea eliminar el registro "+id+"?");

        if(confirm){
            httpRequest("<?php echo constant('URL'); ?>"+controlador+"/"+accion+"/" + id, function(e){
                //console.log(this.responseText);
                document.querySelector("#respuesta").innerHTML = this.responseText;
                const tbody = document.querySelector("#tbody-data");
                const fila  = document.querySelector("#fila-" + id);
              
                tbody.removeChild(fila);
            })
        }
    });
});
// const items1 = document.querySelectorAll(".bEliminar2");
// items1.forEach(item => {
//     item.addEventListener("click", function(){
//         const id = this.dataset.id;
//         const controlador = this.dataset.controlador;
//         const key = this.dataset.key;
//         const accion=this.dataset.accion;

//         const confirm = window.confirm("Deseas eliminar el elemento?");

//         if(confirm){
//             httpRequest("<?php echo constant('URL'); ?>"+controlador+"/"+accion+"/" + key, function(e){
//                 console.log(this.responseText);
//                 const tbody = document.querySelector("#tbody-data");
//                 const fila  = document.querySelector("#fila-" + id);
              
//                 tbody.removeChild(fila);
//             })
//         }
//     });
// });
function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}

function validatePassword(){
    var password = document.getElementById("constrasena");
    var confirm_password = document.getElementById("con_constrasena");
  if(document.getElementById("constrasena").value != document.getElementById("con_constrasena").value) {
    //alert("Las contraseñas deben ser iguales");
    document.getElementById("con_constrasenaHelp").textContent="Las contraseñas deben ser iguales";
    document.getElementById("con_constrasenaHelp").className="alert alert-danger";
    document.getElementById("con_constrasenaHelp").focus;
    document.getElementById("btn_crear").disabled = true;
        //confirm_password.setCustomValidity("Las contraseñas deben ser iguales");
  } else {
    document.getElementById("con_constrasenaHelp").style.display= 'none';
    document.getElementById("btn_crear").disabled = false;
    //confirm_password.setCustomValidity('');
  }
}

