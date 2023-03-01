<?php


session_start();
require 'database.php';
// sends data
if(isset($_POST['fsubmit'])){


    require 'database.php';
 
 
    $insertOneResult = $ffood->insertOne([
        'food' => $_POST['food'],
        'price' => $_POST['price']
    ]);
 
    header("Location: placeorder.php");
 }

//delete data
$food->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
header("Location: placeorder.php");
?>