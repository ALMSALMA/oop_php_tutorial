<?php

    class Person{

        // public            from everywhere
        // protected         only from this class and classes inherits it
        // private           only inside the class

        private $name;
        private $surname; 
        private $age; 

        public static $sub = "Clever";

        const EXAMPLE = "You can't change this!";

        public function __construct(string $firstN = 'New', string $lastN = 'Person', $age = '?')
        {
            $this->name = $firstN;
            $this->surname = $lastN;
            $this->age = $age;
        }

        public function setName(string $first, string $last){
            $this->name = $first;
            $this->surname = $last;
        }

        public function getName(){
            $name = "$this->name $this->surname $this->age <br/>";
            return $name;
        }

        public function setAge($age){
            $this->age = $age;
        }

        public function getAge(){
            return $this->age;
        }

        public static function newSub($new){
            self::$sub = $new;
        }
    }

    // class Pet extends Person{        // inherites Person
        // echo parent::EXAMPLE;
        // echo parent::$sub;
        // echo self::$static_val;
    // }
?>