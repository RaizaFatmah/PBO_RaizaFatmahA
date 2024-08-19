<?php
class fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
// Strawnerry is inherited from fruit
class strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}
$strawberry = new strawberry("strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>