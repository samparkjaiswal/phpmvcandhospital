<?php

$conn=mysqli_connect("localhost","root","","project");

if($conn)
{

$ctb="create table user(id int(11) primary key auto_increment not null,name varchar(200),mobile varchar(200),email varchar(200) unique,pass varchar(200) unique,address varchar(200),dob varchar(200),gender varchar(100),language varchar(200),qualification varchar(200),dt varchar(200))";

$query=mysqli_query($conn,$ctb);

if($query)
{
    echo "Table Create Success";
}
else
{
    echo "Table Creation failed";
}
}

?>
