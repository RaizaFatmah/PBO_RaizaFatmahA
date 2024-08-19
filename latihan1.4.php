<?php
//parent class
abstract class car{
    public $name;
    public function __construct ($name){
        $this->name = $name;
    }
    abstract public function intro();
}
// child classes
class Audi extends car {
    public function intro() {
        return "choose German quality! i'm an $this->name!";
    }
}
class volvo extends car {
    public function intro() {
        return "proud to be swedish! i'am a $this->name!";
    }
}
class citroen extends car{
    public function intro() {
        return "French extravagance! i'am a $this->name!";
    }
}
?>