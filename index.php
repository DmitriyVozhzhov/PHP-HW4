<?php

// else if

//$value = 6;
//
//if ($value === 1) {
//    echo 'green' . PHP_EOL;
//} elseif ($value === 2) {
//    echo 'red' . PHP_EOL;
//} elseif ($value === 3) {
//    echo 'blue' . PHP_EOL;
//} elseif ($value === 4) {
//    echo 'brown' . PHP_EOL;
//} elseif ($value === 5) {
//    echo 'violet' . PHP_EOL;
//} elseif ($value === 6) {
//    echo 'black' . PHP_EOL;
//} else {
//    echo 'white' . PHP_EOL;
//}

// switch case

//$value = 7;
//
//switch ($value){
//    case 1:
//        echo 'green' . PHP_EOL;
//        break;
//    case 2:
//        echo 'red' . PHP_EOL;
//        break;
//    case 3:
//        echo 'blue' . PHP_EOL;
//        break;
//    case 4:
//        echo 'brown' . PHP_EOL;
//        break;
//    case 5:
//        echo 'violet' . PHP_EOL;
//        break;
//    case 6:
//        echo 'black' . PHP_EOL;
//        break;
//    default:
//        echo 'white' . PHP_EOL;
//}

//match

$value = 1;

$result = match ($value) {
    1 => 'green' . PHP_EOL,
    2 => 'red' . PHP_EOL,
    3 => 'blue' . PHP_EOL,
    4 => 'brown' . PHP_EOL,
    5 => 'violet' . PHP_EOL,
    6 => 'black' . PHP_EOL,
default => 'white' . PHP_EOL,
};

echo $result;