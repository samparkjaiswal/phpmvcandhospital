<?php


class fruit
{
    public $name,$color;

    function __construct($n="Mango",$c="Yellow")//By Default pass value
    {
        $this->name=$n;
        $this->color=$c;
    }

    function identify()
    {
        echo $this->name."=".$this->color;
    }

    function type()
    {
        echo $this->name."=".$this->color;
    }

}

$f=new fruit("Apple","Red");

$f->identify();
echo "<br>";
$f1=new fruit();

$f1->type();

?>