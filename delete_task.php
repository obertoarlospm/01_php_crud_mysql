<?php
    include("db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("La consulta Falló");
        }

        $_SESSION['message'] = 'Tarea Eliminada satisfactoriamente';
        $_SESSION['message_type'] = 'danger';
        header("location: /01_php_crud_mysql");
    }
?>