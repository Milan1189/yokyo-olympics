<?php
session_start();
?>
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
    <!-- login form start-->
    <div class="container" style="padding:40px">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
          <h2 class="display-4">If you forgot your password. Enter your valid mail id to reset your password.</h2>
          <form action="" method="post">
            <div class="form-group">
              <label for="email">Your Email:</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="sample@mail.com" aria-describedby="helpId" required autofocus>
            </div>

            <button type="submit" class="btn btn-success btn-lg" name="submit">Send Code</button>
            <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
            <a href="signup.php" class="btn btn-primary btn-lg btn-block" style="margin:10px 0px">Create New Account</a>
            

          </form>
          
          <?php
          if(isset($_POST['submit']))  
          { 
            include '../config/connection.php';       
            $to=$_POST['email'];
            $subject='New Messsage';
            $x=rand(1,9);
            $y=rand(2,8);
            $OTP=$x.$y;
            $headers="From:info@tokyoolympic.com"."Do not reply";
            $query="insert into otp (otp)values('$OTP')";
            mysqli_query($conn,$query);
            if(mail($to, $subject, $OTP, $headers))
                echo "<script>window.alert('Sent mail Successfully!');</script>";
                header("location:verify-otp.php");
        }
      
          ?>
        </div>
        </div>
        <div class="col-md-1">
        </div>
      </div>
    </div>
    <!-- login form end -->
  </body>

</html>

