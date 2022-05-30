<?php

class Persons {
    public $name;
    public $age;
    public $eyeColor;

    // public function set_name($name){
    //     $this->name = $name;
    // }
    // public function set_age($age){
    //     $this->age = $age;
    // }
    // public function set_eyeColor($eyeColor){
    //     $this->eyeColor = $eyeColor;
    // }


    public function __construct($name,$age,$eyeColor){
        $this->name = $name;
        $this->age = $age;
        $this->eyeColor = $eyeColor;
        // $this->get_name();
        // $this->get_age();
        // $this->get_eyeColor();
    }

    public function  get_name (){
        return  $this->name;
    }
    public function get_age(){
        return $this->age;
    }
    public function get_eyeColor(){
        return $this->eyeColor;
    }


}

echo "hadi info:".'<br>';
$hadi = new Persons('hadi',22,'black');
echo $hadi->get_name() .'<br>';
echo $hadi->get_age() .'<br>';
echo $hadi->get_eyeColor().'<br>';

echo "duaa info:".'<br>';
$Dua = new Persons('Dua',18,'Green');
echo $Dua->get_name() .'<br>';
echo $Dua->get_age() .'<br>';
echo $Dua->get_eyeColor().'<br>';

echo "dyar info:".'<br>';
$dyar = new Persons('dyar',30,'Green');
echo $dyar->get_name() .'<br>';
echo $dyar->get_age() .'<br>';

 echo $dyar->get_eyeColor();