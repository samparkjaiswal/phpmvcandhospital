
<html>

<head>

<title>Display Data</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<table style="border:2px solid black;text-align:center">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Address</th>
    <th>Date Of Birth</th>
    <th>Gender</th>
    <th>Language</th>
    <th>Qualification</th>
    <th>Date</th>
    <th colspan="2">Operation</th>

</tr>
<?php

$conn=mysqli_connect("localhost","root","","project");

$query="select * from user";

$data=mysqli_query($conn,$query);
$row=mysqli_num_rows($data);
if($row)
{
while($res=mysqli_fetch_assoc($data))
{
    echo "
    
    <tr>
    <td>".$res['id']."</td>
    <td>".$res['name']."</td>
    <td>".$res['mobile']."</td>
    <td>".$res['email']."</td>
    <td>".$res['address']."</td>
    <td>".$res['dob']."</td>
    <td>".$res['gender']."</td>
    <td>".$res['language']."</td>
    <td>".$res['qualification']."</td>
    <td>".$res['dt']."</td>
    <td><a href='update.php?id=$res[id]'><span class='fa fa-edit'></span></a></td>
    <td><a href='delete.php?id=$res[id]'><span class='fa fa-trash' style='color:red'></span></a></td>
    
    </tr>
    
    ";
}

}
else
{
    echo "Record Not Found";
}
?>

</table>
</body>
</html>