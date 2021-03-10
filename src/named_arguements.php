<?php

// PHP VERSION 7.4 WITHOUT NAMED ARGUEMENTS
$values = [12, 45, 56, 78, 43, 12, 57, 99, 30];
$evenValues = array_filter($values, function($n){
     return $n % 2 === 0;
});

$squareValues = array_map(function($value) {
      return $value * $value;
}, $values);

$total = array_reduce($values, function($accum, $value){
       return $value + $accum;
}, 0);

$position = strpos("Hello Developer", "Developer");

echo '<pre>';
echo var_dump($values, $evenValues, $squareValues, $position, $total);
echo '<pre>';

// PHP VERSION 8.0 WITH NAMED ARGUEMENTS
$numbers = [23, 45, 56,45,36,57,5989,45,20,3040,40];

$evenNumbers = array_filter(callback:function($value) {
     return $value % 2 === 0;
}, array: $numbers);


$squareNumbers = array_map(callback:function($value){
        return $value * $value;
}, array:$numbers);

$totalValue = array_reduce(callback:function($value,$valueTwo) {
     return $value + $valueTwo;
}, array:$numbers, initial: 0);

echo '<pre>';

echo var_dump($evenNumbers, $squareNumbers, $totalValue);
echo '<pre>';




