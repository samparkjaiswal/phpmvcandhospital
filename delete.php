<?php

$conn=mysqli_connect("localhost","root","","project");

$id=$_GET['id'];


$query="delete from user where id='$id'";

$data=mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record Deleted');window.location.href='display.php'</script>";
}
else
{
    echo "<script>alert('Not Deleted');window.location.href='display.php'</script>";
}

?>