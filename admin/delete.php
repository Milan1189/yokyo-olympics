<?php
include '../config/connection.php';
if(isset($_GET['Del']))
{
    $delid=$_GET['Del'];
    $query="delete from posts where id='$a'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:view-post.php");
    }
    else
    {
        echo "<script>window.alert('Unable to Delete')</script>";
    }
}
?>

