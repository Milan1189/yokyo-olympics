<!-- header start -->
<?php 
	include 'header.php';
	?>
	<!-- header end -->
    <!-- welcome start -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Student admission form</h1>
            <hr class="my-2">
        </div>
    </div>
    <!-- welcome end -->
    <!-- content start -->
    <div class="container" style="padding: 40px;">
        <div class="row">
            <div class="col-md-9">
                <form action="" method="post">

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
                      <label for="gender">Gender:</label>
                      <select class="form-control" name="gender" id="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                      </select>
                    </div> 

                    <!-- dob -->
                    <div class="form-group">
                      <label for="dob">DOB:</label>
                      <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId" placeholder="">
                    </div>
                    <!-- address -->
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
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="email" required>
                      </div>
                    <!-- subject Web Development Desktop Application Mobile Application CCNA -->
                    <div class="form-group">
                        <label for="sub">Subject:</label>
                        <select class="form-control" name="subject" id="subject" required>
                          <option value="Web Development">Web Development</option>
                          <option value="Desktoo Application">Desktop Application</option>
                          <option value="Mobile Application">Mobile Application</option>
                          <option value="CCNA">CCNA</option>
                        </select>
                      </div> 
                    <!-- submit b4-form-submit -->
                    <button type="submit" class="btn btn-success btn-lg" name="submit">Admit Now</button>
                    <!-- cancel b4-form-reset -->
                    <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
                

                </form>
                <?php
                include 'config/connection.php';
                if(isset($_POST['submit']))
                {
                    $a=$_POST['fname'];
                    $b=$_POST['lname'];
                    $c=$_POST['gender'];
                    $d=$_POST['dob'];
                    $e=$_POST['address'];
                    $f=$_POST['phone'];
                    $g=$_POST['email'];
                    $h=$_POST['subject'];
                    $query="insert into reservation(first_name, last_name, gender, dob, address, phone, email, subject)values('$a','$b','$c','$d','$e','$f','$g','$h')";
                    $run=mysqli_query($conn,$query);
                    if($run)
                    {
                        echo "<script>alert('Reservation Successfull!')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Error Found, Try Again!')</script>";
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
  