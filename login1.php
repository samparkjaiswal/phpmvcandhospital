
<?php

session_start();
$conn=mysqli_connect("localhost","root","","project");

$email=$_POST['email'];
$pass=$_POST['pass'];

$query="select email,pass from user where email='$email' and pass='$pass'";

$data=mysqli_query($conn,$query);

$row=mysqli_num_rows($data);



if($row)
{
   $_SESSION['user']=$email; 
    echo "<script>alert('Welcome User');window.location.href='../welcome.php'</script>";
}
else
{
    echo "<script>alert('Wrong Username or Password');window.location.href='../login.php'</script>";
}



?>