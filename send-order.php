<?php
                include 'config/connection.php';
                if(isset($_POST['submit']))
                {
                    $a=$_POST['fname'];
                    $b=$_POST['lname'];
                    $c=$_POST['address'];
                    $d=$_POST['phone'];
                    $e=$_POST['email'];
                    $f=$_POST['product'];
                    $g=$_POST['price'];
                    $query="insert into orderconfirm(first_name, last_name, address, phone, email, product, price)values('$a','$b','$c','$d','$e','$f','$g')";
                    $run=mysqli_query($conn,$query);
                    if($run)
                    {
                        echo "Order has been sent!'";
                    }
                    else
                    {
                        echo "Not Sent!";
                    }
                }
                ?>

<br>
<h2><a href="index.php">Return to Home &gt; &gt;</a></h2>