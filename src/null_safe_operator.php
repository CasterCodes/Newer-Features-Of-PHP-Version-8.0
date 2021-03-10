<?php
 // PHP VERSION 7.4 WITHOUT NULL SAFE OPERATOR
  $greatings = null;

  $people = null;
  if($people !== null) {
         $name = $person->name;
         if($name !== null) {
                $sayHello = $name->sayHello();

                if($sayHello !== null){
                       $greatings = $sayHello;
                }

         }
  }

  // PHP VERSION 8.0 WITH NULL SAFE OPERATOR

  $greatings = $people?->name?->sayHello();