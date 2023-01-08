<?php

class calculator
{
    public $a,$b,$c;

    function multi()
    {
    $this->c=$this->a*$this->b;
    echo $this->c;
    }

    function div()
    {
        $this->c=$this->a/$this->b;
        echo $this->c;
    }
}

$d=new calculator();

$d->a=10;
$d->b=2;
$d->multi();
echo "<br>";
$d->div();
echo "<br>";


?>