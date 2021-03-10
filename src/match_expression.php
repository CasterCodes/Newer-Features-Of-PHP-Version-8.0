<?php

// PHP VERSION 7.4 WITHOUT MATCH EXPRESSION

$name = '';

switch($name) {
      case 'Kevin':
       echo 'Hello Kevin';
       break;
      case 'Caster':
        echo 'Hello Caster';
        break;
      default:
          echo null;
};


//  PHP VERSION 8.0 WITH MATCH EXPRESSION
$greatings = match($name) {
     'Kevin' => 'Hello Kevin',
     'Caster' => 'Hello Caster',
     default => 'There is no greatings'
};

echo $greatings;
