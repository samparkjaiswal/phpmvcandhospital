<?php

class data 
{
    public $a,$b,$c;

    function sum()
    {
        $this->c=$this->a+$this->b;
        echo $this->c;
    }



}

$d=new data();

$d->a=10;
$d->b=20;

$d->sum();  

?>