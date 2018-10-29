<?php

class Users {
   public $userName = "John";

   public function __construct() {
       echo "This is thrown by the constructor function whenever an instance of this class is created <br>";
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