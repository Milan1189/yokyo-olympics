<?php
// delete.php

include '../config/connection.php';

if (isset($_GET['id'])) {
    $commentId = $_GET['id'];

    // Perform the deletion query
    $query = "DELETE FROM comment WHERE id = '$commentId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Deletion successful
        header("Location: view-comment.php");
        exit();
    } else {
        // Deletion failed
        echo "Error deleting comment.";
    }
} else {
    // No comment ID specified
    echo "Invalid comment ID.";
}
?>
