<!doctype html>
<html lang="en">

<head>
  <title>Log in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <style>
    body {
      background-color: #fefffe;
    }

    .navbar {
      background-color: #212529;
    }

    .navbar-brand {
      font-weight: bold;
      color: white;
    }

    .navbar-brand:hover {
      color: white;
    }

    .form-container {
      margin-top: 50px;
      max-width: 400px;
      background-color: #fceee9;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.9);
    }

    .form-container h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 3px;
    }

    .btn-success {
      margin-top: 20px;
      width: 100%;
    }

    .btn-danger,
    .btn-primary {
      margin-top: 10px;
      width: 100%;
    }
  </style>
</head>

<body>
  <!-- navbar start -->
  <nav class="navbar navbar-expand-sm navbar-dark">
    <a class="navbar-brand" href="#">Yokyo Funolympic</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- navbar end -->
  <!-- navbar end -->
  <!-- login form start-->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 form-container">
        <h2 class="display-4 text-center">Register Here</h2>
        <form action="" method="post">
          <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" aria-describedby="helpId" required>
          </div>

          <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" aria-describedby="helpId" required>
          </div>

          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-describedby="helpId" required>
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="helpId" required>
          </div>

          <div class="form-group">
            <label for="Usertype">User Type:</label>
            <select class="form-control" name="role" id="usertype">
              <option value="administrator">Administrator</option>
              <option value="user">User</option>
            </select>
          </div>

          <button type="submit" class="btn btn-success btn-lg" name="submit">Create New Account</button>
          <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
          <a href="index.php" class="btn btn-primary btn-lg btn-block">Log in</a>
        </form>
        <?php
        include '../config/connection.php';
        if (isset($_POST['submit'])) {
          $a = $_POST['fname'];
          $b = $_POST['lname'];
          $c = $_POST['username'];
          $d = $_POST['password'];
          $d = md5($d);
          $e = $_POST['role'];

          $query = "insert into users(FirstName, LastName, Username, Password, role)values('$a','$b','$c','$d','$e')";
          $run = mysqli_query($conn, $query);
          if ($run) {
            echo "<script>window.alert('Sign up Successful!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
          } else {
            echo "<script>window.alert('Not Successful!')</script>";
          }
        }
        mysqli_close($conn);
        ?>
      </div>
    </div>
  </div>
  <!-- login form end -->
</body>

</html>
