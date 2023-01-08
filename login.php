<html>

<head><title>Login Page</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

  

<div class="container-fluid">

    <div class="row" style="">
<div class="col-md-3" style="min-height:300px"></div>

<div class="col-md-6" style="min-height:300px;border:2px solid black;border-radius:10px">
<h2 style="color:orange;text-align:center;font-weight:900"><u>Login Here</u></h2><br>
    <form action="code/login1.php" method="post" autocomplete="off">

        <input type="email" name="email" class="form-control" placeholder="Enter Your Email Id"/><br>
        <input type="password" name="pass" class="form-control" placeholder="Enter Your Password"/><br><br>
        <button type="submit" name="login" style="width:100%;" class="btn btn-primary">Login</button><br><br>
        <button type="submit" name="" style="width:100%;" class="btn btn-info"><a href="reg.php" style="color:white;text-decoration: none;">New User!</a></button>

        <a href='password.php' style="color:green;font-weight:bold;font-size:16px;text-decoration:none">Change Password</a>
</form>
</div>
<div class="col-md-3" style="min-height:300px"></div>
    </div>
    
</div>
</body>

</html