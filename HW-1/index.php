<?php

$name = "Настя";  //  1. String - Використовуються для представлення тексту

$age = 3;  //   2. Integers - Представляють цілі числа без десяткової частини

$price = 12.23;  //   3. Floats або Doubles - Представляють числа з десятковою частинею

$isStudent = true;  //   4. Booleans - Представляють логічні значення true або false

$arr = ["12","13","15"];                  //   5. Arrays - Представляють сукупність значень, можуть бути індексованими 
$arr2 = ["one"=> "1","five"=> "5"];      // або асоціативними

$person = new Person();  //   6. Objects - Представляють екземпляри класів і мають методи та властивості

class Person {
    public $name; 
    public $age; 
} 

$variable = null;  //   7. NULL - Представляє відсутність значення або неініціалізовану змінну




