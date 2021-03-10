<?php

// PHP 7.4 without union_types 
class Integers {
      private int $number;

      public function setInteger(int $number){
           $this->number = $number;
      }
      public function getInteger(): int {
             return $this->number;
      }

}

$integer = new Integers();
$integer->setInteger(34.6);
echo $integer->getInteger();


// PHP 8.0 WITH UNION TYPES 

class Numbers {
      public int|float $number;

      public function setNumber(int|float $number){
           $this->number = $number;
      }
      public function getNumber(){
           return $this->number;
      }
}


class StringArray {
      public string|array $names;
      public function  setNames (string|array $names){
            $this->names = $names;

      }
      public function getNames() : array| string{
             return $this->names;
      }
}

$number = new Numbers;
$number->setNumber(234);
echo $number->getNumber();

$name = new StringArray();
$name->setNames('Kevin Caster');
echo $name->getNames();

$names = new StringArray();
$names->setNames(['Kevin Caster', 'John Doe']);
var_dump($names->getNames());


