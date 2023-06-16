<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email and new password entered by the user
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Update the password in the "users" table
    $sql = "UPDATE users SET Password = '$password' WHERE Username = '$email'";
    mysqli_query($conn, $sql);

    // Redirect the user to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $_GET['email']; ?>" readonly>
        <br>
        <label for="password">New Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
