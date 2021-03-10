<?php

// PHP VERSION 7.4 WITHOUT CONTRUCTOR PROPERTY PROMOTION
class Person {
    public string $firstName;
    public string $lastName;
    public int $age;
    public string $eyeColor;

    public function __construct(string $firstName, string $lastName, int $age, string $eyeColor){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->eyeColor = $eyeColor;
    }

    public function sayHello() : string {
          return sprintf("Hello my name is %s %s and i am %s years old", $this->firstName, $this->lastName, $this->age);
    }
}

$person = new Person('Kevin', 'Caster', 24, 'brown');
echo $person->sayHello();

// PHP VERSION 8.0 WITH CONSTRUCTOR PROPERTY PROMOTION

class Student {
    public function __construct(public string $firstName,
    public string $lastName,
    public int $age,
    public string $eyeColor,){
        
    }

    public function sayHello() : string {
          return sprintf("Hello my name is %s %s and i am %s years old", $this->firstName, $this->lastName, $this->age);
    }
}

$student = new Student('Elizabeth', 'Caster', 24, 'brown');
echo $person->sayHello();



