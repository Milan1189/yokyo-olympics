<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:admin/index.php");
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
<title>Welcome to Coderly Media Creation</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description"
	content="Introduction of Coderly Media Creation, Services, Contact, Online Order, Online Payment">
<meta name="keywords"
	content="Coderly Media Creation, Services, Contact, Online Order, Online Payment">
<meta name="author" content="Coderly Chaudhary">
<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
	integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
	crossorigin="anonymous">
<link rel="shortcut icon" href="images/favicon.PNG" type="image/x-icon">
<link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
		<div class="jumbotron jumbotron-fluid">
            <!-- profile -->
<div class="media border p-3">
  <img src="assets/images/avatar1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4 style="text-transform:capitalize;" class="display-4"><?php echo $_SESSION['username']; ?> <br>  </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi minus magnam accusamus quos modi laboriosam quae commodi iusto? Quis autem unde mollitia? Minus laborum dolorem, aspernatur id debitis numquam soluta.</p>
    
  </div>
    <!-- profile end -->

      <nav>
    <ul class="navbar-nav text-center" style="float:right">
            
            <li class="nav-item">
                <a class="nav-link" href="admin/logout.php" style="text-transform:uppercase; display:block; color:black; font-weight:bold;">Log Out</a>
            </li>
           </ul>
</nav>
	
	
</body>
</html>
<?php 
}
?>