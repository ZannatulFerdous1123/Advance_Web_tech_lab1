<?php

class car{
    public $EngineNo;
    public $Model;
    public $Owner;

    function __construct($EngineNo,$Model,$Owner){
        $this->EngineNo=$EngineNo;
        $this->Model=$Model;
        $this->Owner=$Owner;
    }

    function showInfo(){
        echo "Engine No:" .$this->EngineNo."<br>";
        echo "Model:" .$this->Model."<br>";
        echo "Owner:" .$this->Owner."<br>";  

    }

    
}

$car1=new car("1111","BMW","Jannat");
$car2=new car("2222","TOYOTA","Mithila");

echo "Car-1"."<br>";
$car1->ShowInfo();
echo ".........................."."<br>";

echo "Car-2"."<br>";
$car2->ShowInfo();