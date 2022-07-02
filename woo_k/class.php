<?php


class Car{

    public int $speed;
    public String $color;

    
  

    public function __construct($speed,$color)
    {
        $this->speed = $speed;
        $this->color = $color;
    }


    public function ptint_info()
    {
        echo $this->color." ".$this->speed;
    }

}

$c = new Car(100 , "red");
$c->ptint_info();





?>