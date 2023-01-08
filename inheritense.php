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

 }

 $v=new vegetable("Apple","Red");



 $v->data();

?>