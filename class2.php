<?php

class person
{
    public $name="Rahul";
    public $age=20;

    function disp()
    {
        echo $this->name."=".$this->age;
    }

}

$a=new person();

//$a->name="Sampark";
$a->age=21;

$a->disp();

?>