<?php

$conn=mysqli_connect("localhost","root","","project");

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$lang=$_POST['language'];
$langu=implode(',',$lang);
$qualification=$_POST['qualification'];
$dt=date('Y/m/d');

$query="insert into user(name,mobile,email,pass,address,dob,gender,language,qualification,dt) values('$name','$mobile','$email','$pass','$address','$dob','$gender','$langu','$qualification','$dt')";

$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Registration Successfull');window.location.href='../reg.php'</script>";
}
else
{
    echo "<script>alert('Registration failed');window.location.href='../reg.php'</script>";
}

?>