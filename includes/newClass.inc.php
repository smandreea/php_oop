<?php

class Users {
   public $userName = "John";
   public $error = "This is the class called " . __CLASS__ . " !";
   public static $staticVar = 0;

   public function __construct() {
       echo "This is thrown by the constructor function whenever an instance of this class is created <br>";
   }
   public function __toString() {
       echo "toString method: ";
       return $this->error;
   }
   public static function staticMethod() {
        return self::$staticVar;
   }
   public function setNewName ($newName) {
       $this->userName = $newName;
   }

   public function getName () {
       return $this->userName;
   }

   public function __destruct() {
       echo "I am the destructor";
   }
}

?>