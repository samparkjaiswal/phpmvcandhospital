<html>

<head><title>Registration Page</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-3" style="min-height: 900px;"></div>

        <div class="col-md-6" style="min-height: 900px;border:2px solid black;border-radius:10px">
            <h2 style="color:red;font-weight:900;text-align:center"><u>Registration Here</u></h2>
        <form action="code/insert.php" method="post" autocomplete="off">
            
            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name"/>
            </div>
<br>
            <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="tel" class="form-control" name="mobile" placeholder="Enter Your Mobile"/>
            </div>
<br>
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email Id"/>
            </div>
<br>

            <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" class="form-control" name="pass" placeholder="Create Your Password"/>
            </div>
<br>
            <div class="form-group">
            <label for="address">Address:</label>
           <textarea type="text" class="form-control" name="address" placeholder="Enter Your Address"></textarea>
            </div>
<br>
            <div class="form-group">
            <label for="dob">Date Of Birth:</label>
           <input type="date" class="form-control" name="dob"/>
            </div>
            <br>
            <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="radio" class="" name="gender" value="male"/>Male
            <input type="radio" name="gender" value="female"/>Female
            </div>
<br>
            <div class="form-group">
            <label for="language">Language Known:</label>
            <input type="checkbox" class="" name="language[]" placeholder="" value="Hindi"/>Hindi
            <input type="checkbox" class="" name="language[]" placeholder="" value="English"/>English
            <input type="checkbox" class="" name="language[]" placeholder="" value="Punjabi"/>Punjabi
            </div>
<br>
            <div class="form-group">
            <label for="qualification">Qualification:</label>
            <select name="qualification" class="form-control">
            <option hidden>Select Qualification</option>
                <option>Diploma</option>
                <option>B.Tech</option>
                <option>M.Tech</option>
            
        </select>
<br><br>
        <button type="submit" name="submit" class="btn btn-success" style="width:100%">Registration</button><br><br>
        <button type="submit" name="" class="btn btn-warning" style="width:100%"><a href="login.php" style="color:white;text-decoration:none">Already Registerd</a></button>

            </div>

        </form>
        


        </div>

        <div class="col-md-3" style="min-height:900px"></div>
    </div>
</div>
</body>

</html>