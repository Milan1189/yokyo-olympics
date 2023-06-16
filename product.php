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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/favicon.PNG" type="image/x-icon">
<link rel="stylesheet" href="css/mystyle.css">
<style>
    .checked {
  color: orange;
}
</style>
</head>
<body>
	<!-- navbar start -->
	<nav class="navbar navbar-expand-sm navbar-dark"
    style="background-color: navy;">
    <a class="navbar-brand" href="index.php">Coderly Media Creation</a>
    <button class="navbar-toggler d-lg-none" type="button"
        data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
            </a></li>
            <li class="nav-item"><a class="nav-link" href="about-us.php">About
                    us</a></li>
            <li class="nav-item"><a class="nav-link" href="our-services.php">Our
                    Services</a></li>
            <li class="nav-item"><a class="nav-link" href="product.php">Our
                    Products</a></li>
            <li class="nav-item"><a class="nav-link" href="photo-gallery.php">Photo
                    Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="video-gallery.php">Videos</a></li>
                    
            <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact
                    us</a></li>
                    
  
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="admit-now.php" class="btn btn-outline-success my-2 my-sm-0">Admission
                Open</a>
        </form>
    </div>
</nav>
	
	<!-- item start -->
	<div class="container" style="padding: 30px;">
	<h5 class="text-center">Items available to Buy</h5>
		<h2 class="display-4 text-center">Products Available</h2>
		<hr class="my-2">
		<div class="row">
        <?php
        include 'config/connection.php';
        $query = "select * from orders";
        $run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($run)) {
            $a = $row['id'];
            $b = $row['title'];
            $c = $row['content'];
            $d = $row['image'];
            ?>
            <div class="col-md-4">
				<h2><?php echo $b; ?></h2>
				<img src="assets/product/<?php echo $d; ?>" alt="web" class="img-thumbnail">
				<p><?php echo substr($c,0,100); ?></p>
				<a href="order-now.php?id=<?php echo $a; ?>"
					class="btn btn-danger btn-lg">Order Now</a>
			</div>
            <?php
        }
        ?>
                

        </div>
	</div>
	
	<!-- footer start -->
    <?php 
    include 'footer.php';
    ?>
    <!-- footer end -->
</body>
</html>
