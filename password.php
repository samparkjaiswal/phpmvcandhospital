<html>

<head><title>Change Password</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid">

<div class="row">

<div class="col-md-3" style="min-height:400px"></div>

<div class="col-md-6" style="min-height:400px;border:2px solid black;border-radius:10px">

<h2 style="color:green;text-align:center;font-weight:900"><u>Change Password</u></h2>

<form action="code/changepass.php" method="post" autocomplete="off">

<div class="form-group">

<label>Email:</label>
<input type="email" name="email" class="form-control" placeholder="Enter Your Email Id"/>
</div><br>

<div class="form-group">
<label>Old Password:</label>
<input type="text" name="opass" class="form-control" placeholder="Enter Your Old Password"/>
</div><br>

<div class="form-group">
    <label>New Password:</label>
<input type="text" name="npass" class="form-control" placeholder="Create Your New Password"/>
</div><br>

<button type="submit" name="" class="btn btn-info" style="font-weight:bold;font-size:16px;width:100%">Change Password</button>
</form>

<a href='login.php' style="color:red;text-size:16px;text-decoration:none;font-weight:bold">Back To Login</a>
</div>

<div class="col-md-3" style="min-height:400px"></div>

</div>

</div>

</body>

</html>