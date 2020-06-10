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
              cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>"     
               
           }
           $("#departamentos").html(cadena);
           var iddepartamento = $("#departamentos").val();
           listarCiudades(iddepartamento);
       }else{
        cadena +="<option value=''>'NO HAY REGISTROS'</option>" 
           $("#departamentos").html(cadena);
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
              cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>"     
               
           }
           $("#ciudades").html(cadena);
           var iddepartamento = $("#departamentos").val();
           listarCiudades(iddepartamento);
       }else{
        cadena +="<option value=''>'NO HAY REGISTROS'</option>" 
           $("#ciudades").html(cadena);
       }

    })
}



