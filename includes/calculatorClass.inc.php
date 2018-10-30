<?php
    class Compute {
        public $number1;
        public $number2;
        public $operator;
        public $result;

        public function __construct($number1, $number2, $operator) {
            $this->number1 = $number1;
            $this->number2 = $number2;
            $this->operator = $operator;
        }

        public function setCalcNumbers() {
            switch ($this->operator) {
                case "add": $result = $this->number1 + $this->number2;
                break;
                case "substract": $result = $this->number1 - $this->number2;
                break;
                case "divide": $result = $this->number1 / $this->number2;
                break;
                default: $result = "Undefined";
                break;
            }
        }
        
        public function getCalcNumbers() {
            echo $result;
        }
        
    }