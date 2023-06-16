<!-- header start -->
<?php 
	include 'header.php';
	?>
	<!-- header end -->
    <!-- welcome start -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Checkout now</h1>
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
        $itemid=$_GET['id'];
        $query="select * from orders where id='$itemid'";
        $run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($run))
                {
                    $b=$row['title'];
                    $c=$row['content'];
                    $d=$row['image'];
        ?>
            <div class="col-md-9">
                <form action="send-order.php" method="post">

                    <div class="form-group">
                      <label for="fname">First Name:</label>
                      <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" aria-describedby="helpId" required autofocus>
                      <small id="helpId" class="text-muted"></small>
                    </div>

                    <div class="form-group">
                      <label for="lname">Last Name:</label>
                      <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" aria-describedby="helpId" required>
                      <small id="helpId" class="text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="Address" required>
                      </div>
                    <!-- phone -->
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="Phone" required>
                      </div>
                    <!-- email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="email" required>
                      </div>

                      <div class="form-group">
                        <label for="product">Product:</label>
                        <input type="text" class="form-control" name="product" id="email" aria-describedby="helpId" placeholder="email" required value="<?php echo $b; ?>">
                      </div>

                      <div class="form-group">
                        <label for=price">Price:</label>
                        <input type="text" class="form-control" name="price" id="email" aria-describedby="helpId" placeholder="email" required value="<?php echo $c; ?>"> 
                      </div>
                   
                    <!-- submit b4-form-submit -->
                    <button type="submit" class="btn btn-success btn-lg" name="submit">Check Out</button>
                    <!-- cancel b4-form-reset -->
                    <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
                

                </form>
                <?php 
                }
            }
                ?>
                
            </div>
            <div class="col-md-3">
            <?php
                include 'rightbar.php'; 
                ?>

            </div>
        </div>
    </div>
    <!-- content end -->
    <!-- footer start -->
    <?php 
    include 'footer.php';
    ?>
    <!-- footer end -->
  