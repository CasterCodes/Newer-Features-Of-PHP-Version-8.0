<?php

$message = 'Hello my name is Kevin Caster and love your programming courses on Udemy';

echo  str_starts_with($message, 'Hello');

echo str_ends_with(needle:'Udemy', haystack: $message);

echo str_contains(haystack: $message, needle:'Coding');

echo strpos(haystack:$message, needle:'Udemy');