<?php
class Dog {
    public function bark() {
        echo "woof<br/>";
    }
}
 
class Hound extends Dog {
    public function sniff() {
        echo "sniff<br/>";
    }
 
    public function bark() {
        echo "bowl<br/>";
    }
}
 
// Creating instances and testing the methods
$dog = new Dog();
$dog->bark(); // Outputs: woof
 
$hound = new Hound();
$hound->bark(); // Outputs: bowl
$hound->sniff(); // Outputs: sniff
?>