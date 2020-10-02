<?php
    require_once("includes/db2.php");

    if(!isset($_GET['id'])) {
        header("Location: index2.php");
    }
    $id = $_GET['id'];
    $sql = "DELETE FROM tennis_record WHERE id = '" .$id. "' LIMIT 1";
    if(mysqli_query($conn, $sql)) {
        header("Location: index2.php");
    }
?>