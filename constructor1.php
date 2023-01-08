<?php

class calculation
{
    public $a,$b,$c;

    function __construct($m,$n)//not take c as argument because in c variable we don't pass any value at object creation time
    {
        $this->a=$m;
        $this->b=$n;
       
        
    }

    function add()
    {
      echo $this->c=$this->a+$this->b;
        
    }

    function module()
    {
        echo $this->c=$this->a%$this->b;
    }

    function sub()
    {
        echo $this->c=$this->a-$this->b;
    }

    function mul()
    {
        echo $this->c=$this->a*$this->b;
    }

    function div()
    {
        echo $this->c=$this->a/$this->b;
    }


}

$s=new calculation(34,10);

$s->add();
echo "<br>";
$s1=new calculation(42,5);

$s1->module();
echo "<br>";
$s->module();

echo "<br>";

$s1->sub();
echo "<br>";
$s->sub();
echo "<br>";

$s->mul();
echo "<br>";
$s1->mul(); 
echo "<br>";
$s->div();
echo "<br>";
$s1->div();

?>