<?php

// try{
//     $fileName = 'index.txt';
//     if(!file_exists($fileName)) throw new Exception('File not found');
//     $fileResource = fopen($fileName, 'w');
//     fwrite($fileResource, '  New content into my file Introduction: Facilitation is an important skill for UX designers to have in their toolkit. It involves effectively guiding a group of diverse');
// } catch(Exception $exception){
//     echo $exception;
// }

try{
    $fileName = 'index.txt';
    if(!file_exists($fileName)) throw new Exception('File not found');
    $status = unlink($fileName);
    if($status){
        echo "File has been deleted";
    }else{
        echo "File was not deleted";
    }
}catch(Exception $exception){
       echo $exception;
  }

//session_start();
// $value = 2220;
// setcookie('data', $value, time() + 60);


// <h3> This is page one</h3>
// //<?php
// //$value = 2220;
// //$_SESSION['data'] = $value;


//  <a href="page2.php">Page 2</a>