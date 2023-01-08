<?php

class fruits
{
    public $name,$type;

    function __construct($n,$t)
    {
        $this->name=$n;
        $this->type=$t;

    }

    function data()
    {
        echo $this->name."=".$this->type;
    }
}

class vegetable extends fruits
{
    public $msg="Hello This information for u";
       
    
}

$obj=new vegetable("apple","fruit");

$obj->data();
echo "<br>";
echo $obj->msg;
?>