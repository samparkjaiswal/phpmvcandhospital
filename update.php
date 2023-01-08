<?php

$conn=mysqli_connect("localhost","root","","project");

$id=$_GET['id'];

$query="select * from user where id='$id'";

$data=mysqli_query($conn,$query);

while($res=mysqli_fetch_assoc($data))
{
    $name=$res['name'];
    $mobile=$res['mobile'];
    $email=$res['email'];
    $address=$res['address'];
    $dob=$res['dob'];
    $gender=$res['gender'];
    $lang=$res['language'];
    $langu=explode(',',$lang);
    $qualification=$res['qualification'];
  
}

?>





<?php


if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $lang=$_POST['language'];
    $langu=implode(',',$lang);
    $qualification=$_POST['qualification'];
    $dt=date('Y/m/d');

    $update="update user set name='$name',mobile='$mobile',email='$email',address='$address',dob='$dob',gender='$gender',language='$langu',qualification='$qualification',dt='$dt' where id='$id'";

    $query=mysqli_query($conn,$update);
    if($query)
    {
        echo "<script>alert('Data Update');window.location.href='display.php'</script>";
    }
    else
    {
        echo "<script>alert('Data Not Update');window.location.href='display.php'</script>";
    }
}


?>






<html>

<head><title>Updation Page</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-3" style="min-height: 700px;"></div>

        <div class="col-md-6" style="min-height: 700px;border:2px solid black;border-radius:10px">
            <h2 style="color:red;font-weight:900;text-align:center"><u>Updation Here</u></h2>
        <form action="" method="post" autocomplete="off">
            
            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" value="<?php echo "$name" ?>" name="name" placeholder="Enter Your Name"/>
            </div>
<br>
            <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="tel" class="form-control" value="<?php echo "$mobile" ?>" name="mobile" placeholder="Enter Your Mobile"/>
            </div>
<br>
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo "$email"  ?>" placeholder="Enter Your Email Id"/>
            </div>
<br>

            
            <div class="form-group">
            <label for="address">Address:</label>
           <textarea type="text" class="form-control" name="address" placeholder="Enter Your Address"><?php echo "$address" ?></textarea>
            </div>
<br>
            <div class="form-group">
            <label for="dob">Date Of Birth:</label>
           <input type="date" class="form-control" value="<?php echo "$dob" ?>" name="dob"/>
            </div>
            <br>
            <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="radio" class="" name="gender" value="male"
            <?php
            if($gender=="male")
            {
                echo "checked";
            }
            ?>
            />Male
            <input type="radio" name="gender" value="female"
            <?php
            if($gender=="female")
            {
                echo "checked";
            }
            ?>
            />Female
            </div>
<br>
            <div class="form-group">
            <label for="language">Language Known:</label>
            <input type="checkbox" class="" name="language[]" placeholder="" value="Hindi"
            <?php
            if(in_array("Hindi",$langu))
            {
                echo "checked";
            }
            ?>
            />Hindi
            <input type="checkbox" class="" name="language[]" placeholder="" value="English"
            <?php
            if(in_array("English",$langu))
            {
                echo "checked";
            }
            ?>
            
            />English
            <input type="checkbox" class="" name="language[]" placeholder="" value="Punjabi"
            <?php
            if(in_array("Punjabi",$langu))
            {
                echo "checked";
            }
            ?>
            />Punjabi
            </div>
<br>
            <div class="form-group">
            <label for="qualification">Qualification:</label>
            <select name="qualification" class="form-control">
            <option hidden>Select Qualification</option>
                <option value="Diploma"
                <?php
                if($qualification=="Diploma")
                {
                    echo "selected";
                }
                ?>

                >Diploma</option>
                <option value="B.Tech"
                <?php
                if($qualification=="B.Tech")
                {
                    echo "selected";
                }
                ?>
                >B.Tech</option>
                <option value="M.Tech"
                <?php
                if($qualification=="M.Tech")
                {
                    echo "selected";
                }
                ?>
                >M.Tech</option>
            
        </select>
<br><br>
        <button type="submit" name="update" class="btn btn-success" style="width:100%">Update</button>
        

            </div>

        </form>
        


        </div>

        <div class="col-md-3" style="min-height:700px"></div>
    </div>
</div>
</body>

</html>

