<?php
include("db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    //echo $title . "<br>";
    //echo $description;

    $query = "INSERT INTO task (title, description) VALUE ('$title', '$description')";
    $result = mysqli_query($conn, $query);

    //verifica si existe o si esta correcta la ejecucion de la consulta con la BD.
    if (!$result){
        die("La consulta Falló.");
    }

    $_SESSION['message'] = 'Tarea guardada exitosamente';
    $_SESSION['message_type'] = 'success';

    //echo "Regiter Saved. <br>" . $query;
    //header("Location: index.php");
    header("Location: /01_php_crud_mysql");
}
?>