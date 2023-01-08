<?php

class calculation
{
    public $a,$b,$c;

    function sum()
    {
        $this->c=$this->a+$this->b;
        echo $this->c;
    }

    function sub()
    {
        $this->c=$this->a-$this->b;
        return $this->c;
    }
}

    $c1=new calculation();

    $c1->a=30;
    $c1->b=20;

    $c1->sum();
    
    $c2=new calculation();
echo "<br>";
    $c2->a=45;
    $c2->b=5;
    echo $c2->sub();


?>