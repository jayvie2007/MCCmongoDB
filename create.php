<?php

session_start();

// send data to customer>>>food collection
if(isset($_POST['submit'])){


   require 'database.php';


   $insertOneResult = $food->insertOne([
       'food' => $_POST['food'],
       'price' => $_POST['price']
   ]);

   header("Location: order.php");
}


// send data to customer>>>message collection
if(isset($_POST['submitform'])){


    require 'database.php';
 
 
    $insertOneResult = $message->insertOne([
        'fname' => $_POST['fname'],
        'eaddress' => $_POST['eaddress'],
        'num' => $_POST['num'],
        'subject' => $_POST['subject'],
        'msg' => $_POST['msg']
    ]);
 

    header("Location: contact.php");
 }


?>
