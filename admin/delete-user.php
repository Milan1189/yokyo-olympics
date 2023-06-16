<?php
include '../config/connection.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Delete the user from the database
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // User deleted successfully
        echo "<script>alert('User deleted successfully.');</script>";
    } else {
        // Failed to delete user
        echo "<script>alert('Failed to delete user.');</script>";
    }

    // Redirect back to the previous page
    echo "<script>window.location.href = 'dashboard.php';</script>";
} else {
    // Invalid request
    echo "<script>alert('Invalid request.');</script>";
    echo "<script>window.location.href = 'dashboard.php';</script>";
}
?>
