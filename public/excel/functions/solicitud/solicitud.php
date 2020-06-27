<?php
function getsolicitud(){
 
    $mysqli = getConnexion();
    $query =('SELECT sol.id_solicitud, sol.fecha_solicitud, sol.descripcion, 
    cent.nombre as nombreCentro, usu.nombre as nombreUsuario
    FROM solicitud as sol
    INNER JOIN centro as cent on cent.id_centro=cent.id_centro
    INNER JOIN usuario as usu on usu.identificacion=sol.identificacion');
    return $mysqli->query($query);
}
?>
