<?php

$conn=mysqli_connect("localhost","root","");


    $db="create database project";
    $data=mysqli_query($conn,$db);

    if($data)
    {
        echo "Database Create Successfull";
    }
    else
    {
        echo "Database Creation Failed";
    }
   



?>