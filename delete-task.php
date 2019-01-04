<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('query failed');
    }else {
        header('Location: index.php');
    }

    $_SESSION['message'] = 'Task deleted succesfully';
    $_SESSION['message_type'] = 'danger';
}

?>