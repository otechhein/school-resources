<?php

class Calc {
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $one, int $two, $three)  
    {
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }
    
    public function calculator(){
        // echo "Test";die;
        switch($this->operator){
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            default:
            echo "Error!";
        }
    }
}