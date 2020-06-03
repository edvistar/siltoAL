function listarDepartamentos(){
    $.ajax({
        url:'../controllers/listarDepartamento.php',
        type:'POST'
    }).done(function(resp){
        //alert(resp);
       var data = JSON.parse(resp);
       var cadena = "";
       if(data.length>0){
           for (var i = 0; i < data.length; i++) {
              cadena +="<option value='"+data[i][0]+","+data[i][1]+"'>"+data[i][1]+"</option>"     
               
           }
           $("#departamento").html(cadena);
           var iddepartamento = $("#departamento").val();
           listarCiudades(iddepartamento);
       }else{
        cadena +="<option value=''>'NO HAY REGISTROS'</option>" 
           $("#departamento").html(cadena);
       }

    })
}





function listarCiudades(iddepartamento){
    $.ajax({
        url:'../controllers/listarCiudad.php',
        type:'POST',
        data:{
            iddepartamento:iddepartamento
        }
    }).done(function(resp){
        //alert(resp);
       var data = JSON.parse(resp);
       var cadena = "";
       if(data.length>0){
           for (var i = 0; i < data.length; i++) {
              cadena +="<option value='"+data[i][1]+"'>"+data[i][1]+"</option>"     
               
           }
           $("#ciudad").html(cadena);
           var iddepartamento = $("#departamento").val();
           listarCiudades(iddepartamento);
       }else{
        cadena +="<option value=''>'NO HAY REGISTROS'</option>" 
           $("#ciudad").html(cadena);
       }

    })
}



