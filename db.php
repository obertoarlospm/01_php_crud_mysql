<?php

session_start();

//Se genera un objeto de conexion a la BD y se almacena en $conn.
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

//Verificamos que se realizo la conexion a la BD, revisando si existe contenido en $conn.
/*if (isset($conn)) {
    echo 'La BD esta conectada';
}*/

?>