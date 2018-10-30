<?php
class Person {
    public $firstName = "John";
    public $lastName = "Stuart";
    public $hairColor = "Brown";
    public $eyeColor = "Green";

    public function __construct($first, $last, $hair, $eyes) {
        $this->firstName = $first;
        $this->lastName = $last;
        $this->hairColor = $hair;
        $this->eyeColor = $eyes;
    }

    public function fullName() {
        return $this->firstName . " " . $this->lastName;
    }

}
