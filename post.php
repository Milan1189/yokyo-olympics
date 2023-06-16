<!-- header start -->
<?php 
	include 'header.php';
	?>
	<!-- header end -->
    <!-- welcome start -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">News and Events</h1>
            <hr class="my-2">
        </div>
    </div>
    <!-- welcome end -->
    <!-- content start -->
    <div class="container" style="padding: 40px;">
        <div class="row">
        <?php
        include 'config/connection.php';
        if(isset($_GET['id']))
        {
        $postid=$_GET['id'];
        $query="select * from posts where id='$postid'";
        $run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($run))
                {
                    $b=$row['title'];
                    $c=$row['content'];
                    $d=$row['image'];
        ?>
            <div class="col-md-9">
                <h2><?php echo $b; ?></h2>
                <p>
                <?php echo $c; ?>
                </p>
                <img src="images/<?php echo $d; ?>" alt="photo" class="img-thumbnail">
                
            </div>
            <div class="col-md-3">
            <?php
                include 'rightbar.php'; 
                ?>
            </div>
        </div>
    </div>
    <?php
        }
    }
        ?>
    <!-- content end -->
    <!-- footer start -->
    <?php 
    include 'footer.php';
    ?>
    <!-- footer end -->
 