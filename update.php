<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * file to update database
 */

$message ="";
$user="";
if(!empty($_GET['id'])){
    $message=$_GET['id'];
    $user=$_GET['id'];
} else {
    $message="Error: page called but id is empty";
    $user=0;
}



//include configuration file
include __DIR__.'/config.php';

//create database method
$connection= connect_db();

//create switch condition to check for each id -> user
switch ($user) {
    case 'B7F7506676':
        $user="cyril";
        break;
    
    case 'E0116DB925':
        $user="carole";
        break;
    
    case '8023F4A4F3':
        $user="maxime";
        break;
    
    case '3062C9B922':
        $user="antoine";
        break;
    
    default:
        $user="undefined";
        break;
}

//create mysql query to insert a new record on database table
$insert="INSERT INTO `log`(`date`, `time`, `user`) VALUES (curdate(), curtime(), '$user')";
$prepare=$connection->prepare($insert);
$prepare->execute();

if($prepare->rowCount()==1){
    echo "record added";
}else{
    echo"Error: this record wasn't added $insert";
}