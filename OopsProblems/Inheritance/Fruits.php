<?php
class Fruit {

    public $name;
    public $color;

    /* Constructor of class fruit */
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color; 
    }

    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
}

/* Strawberry is inherited from Fruit */
class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? \n"; 
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
