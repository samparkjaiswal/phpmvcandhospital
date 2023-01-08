<?php
  session_start();
?>

<html>

<head><title>Welcome Page</title></head>

<body>
    <?php

  

    if(!isset($_SESSION['user']))
    {
        header("location:login.php");
    }

    ?>

    <h1>Hello <span style="color:orange"><?php echo $_SESSION['user'] ?>,</span> Welcome To Login Page</h1>

    <h2 style="color:green"><a href="code/logout.php" style="color:green">Logout</a></h2>

  
</body>

</html>