<?php


session_start();
require 'database.php';


$ffood->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
header("Location: admin.php");

$message->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
header("Location: admin.php");


?>