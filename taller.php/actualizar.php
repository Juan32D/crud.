<?php
include "../conexion.php";


if(isset($_POST['registrar']))
{
    $conexion->query("INSERT INTO users VALUES(
        null,
        '$_POST[nombres]',
        '$_POST[documentos]',
        1
     )" );
    
    
    
}else{isset($_POST['actualizar']) )
{
    $conexion->query("DELETE FROM users WHERE id = '$_POST[id]' ");
}
else
{
    $conexion->query("DELETE FROM users WHERE id = '$_GET[id]' ");

}
    
}
