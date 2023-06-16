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
    // Retrieve the email and OTP entered by the user
    $email = $_POST["email"];
    $otp = $_POST["otp"];

    // Check if the OTP is valid for the provided email
    $sql = "SELECT * FROM otp WHERE otp = '$otp'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Delete the OTP from the "otp" table
        $sql = "DELETE FROM otp WHERE otp = '$otp'";
        mysqli_query($conn, $sql);

        // Redirect the user to the password reset page
        header("Location: reset_password.php?email=$email");
        exit();
    } else {
        $error = "Invalid OTP";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
</head>
<body>
    <h1>OTP Verification</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $_GET['email']; ?>" readonly>
        <br>
        <label for="otp">OTP:</label>
        <input type="text" name="otp" required>
        <br>
        <button type="submit">Verify OTP</button>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    </form>
</body>
</html>
