<?php
$conn=mysqli_connect("localhost","root","","project");

$email=$_POST['email'];
$opass=$_POST['opass'];
$npass=$_POST['npass'];

$query="select email,pass from user where email='$email' and pass='$opass' ";

$data=mysqli_query($conn,$query);

$row=mysqli_num_rows($data);

if($row)
{
    $update="update user set pass='$npass' where email='$email'";

    $dat=mysqli_query($conn,$update);
    if($dat)
    {
        echo "<script>alert('Password Update');window.location.href='../password.php'</script>";
    }
   
    
}
else
{
    echo "<script>alert('Old Password/Email Is Wrong');window.location.href='../password.php'</script>";
}


?>