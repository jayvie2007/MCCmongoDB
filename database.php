<?php


require_once __DIR__ . "/vendor/autoload.php";

//call database in customer>>>message
$message = (new MongoDB\Client)->customer->message;

//call database in customer>>>food
$food = (new MongoDB\Client)->customer->food;

//call database in customer>>>finalfood
$ffood = (new MongoDB\Client)->customer->finalfood;
?>