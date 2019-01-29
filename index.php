<?php

use rrmontuan\challenge\MultiplesIterator;

require(__DIR__ . '/vendor/autoload.php');

//Defines the range that will be used
$numbers = range(1, 100);

//Multiples iterators
$numbers = new ArrayIterator($numbers);
$numbers = new MultiplesIterator($numbers, [3, 5], 'StarCorpianos');
$numbers = new MultiplesIterator($numbers, [3], 'StarCorp');
$numbers = new MultiplesIterator($numbers, [5], 'IT');

//show the values
foreach ($numbers as $value){
    echo $value . '<br />';
}