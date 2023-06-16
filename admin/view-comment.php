<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
} else {
?>
<!doctype html>
<html lang="en">

<head>
    <title>Yokyo FunOlympic Dashboard</title>
    <!-- Required meta tags -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            color: #fff;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .container-fluid {
            padding-top: 20px;
        }

        .card {
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .display-4 {
            color: #343a40;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .quick-access {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .quick-access-item {
            flex-basis: calc(33.3333% - 20px);
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .quick-access-item i {
            font-size: 40px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand" href="dashboard.php">Yokyo FunOlympic Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="text-transform:uppercase"><?php echo $_SESSION['username']; ?>
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- dashboard start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h2 class="display-9"> <i class="fa fa-line-chart"></i> Dashboard</h2>
                <a href="view-post.php" class="btn btn-primary btn-block">View All Post</a>
                <a href="view-consumer.php" class="btn btn-primary btn-block">View Users</a>
                <a href="view-comment.php" class="btn btn-primary btn-block">View Comments</a>
                <a href="upload-photo.php" class="btn btn-primary btn-block">Update Gallery</a>
                <a href="upload-video.php" class="btn btn-primary btn-block">Upload Video</a>
            </div>
        <div class="col-md-8">
            <h2 class="display-9">View All Posts</h2>
            <table class="table table-primary table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Comment ID</th>
                        <th>Username</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php
                include '../config/connection.php';
                $query="select * from comment";
                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run))
                {
                    $a=$row['id'];
                    $b=$row['user'];
                    $c=$row['date'];
                    $d=$row['comment'];
                ?>
               <tbody>
    <tr>
        <td scope="row"><?php echo $a; ?></td>
        <td><?php echo $b; ?></td>
        <td><?php echo $d; ?></td>
        <td><?php echo $c; ?></td>
        <td><a class="btn btn-danger" href="delet.php?id=<?php echo $a; ?>">Delete</a></td>
        <!-- The above line passes the comment ID as a parameter in the URL -->
    </tr>
</tbody>

                <?php 
                }
                ?>
            </table>
        </div>
    </div>        
    </div>
    <!-- dashboard end -->
  </body>
</html>
<?php
}
?>

