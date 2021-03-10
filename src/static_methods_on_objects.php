<?php

class Person {
      public static function sayHello(){
            return 'Hello my name is Kevin Caster';
      }
}

$person = new Person();

echo $person::class;

echo $person::sayHello();

