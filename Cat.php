<?php


class Cat
{
    private $name;
    private $gender;
    private $age;
    private $weight;
    private $color;

    public function __construct($name, $gender, $age, $weight, $color){
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->weight = $weight;
        $this->color = $color;
    }

    public function meow(){
        echo "Eeeeeeeeeeeat";
    }

    public function about(){
        echo "Name: " . $this->name . " ";
        echo "Gender: " . $this->gender . " ";
        echo "Age: " . $this->age . " ";
        echo "Weight: " . $this->weight . " ";
        echo "Color: " . $this->color . " ";
    }
}