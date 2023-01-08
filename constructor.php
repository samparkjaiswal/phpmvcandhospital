<?php

class home
{
    public $name,$age;

    function __construct($n,$a)
    {
        $this->name=$n;
        $this->age=$a;
    }

    function data()
    {
        echo $this->name."=".$this->age;
    }
}

$h=new home("Sibu",20);

$h->data();

?>