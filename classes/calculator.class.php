<?php

    class Calculator{

        private $number1;
        private $number2;
        private $operation;

        public function __construct(string $oper, int $num1, int $num2)
        {
            $this->number1 = $num1;
            $this->number2 = $num2;
            $this->operation = $oper;
        }
        public function calculate(){

            switch ($this->operation) {
                case 'add':
                    $result = $this->number1 + $this->number2;
                    return $result;
                    break;

                case 'sub':
                    $result = $this->number1 - $this->number2;
                    return $result;
                    break;
        
                case 'mul':
                    $result = $this->number1 * $this->number2;
                    return $result;
                    break;

                case 'div':
                    $result = $this->number1 / $this->number2;
                    return $result;
                    break;

                default:
                    echo 'Error!';
                    break;
            }
        }
 
    }

?>