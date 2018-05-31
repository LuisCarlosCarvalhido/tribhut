<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <?php
        include __DIR__.'/template/_library.html';
        ?>
        <link type="text/css" rel="stylesheet" media="screen" href="css/check.css">
    </head>
    <body>
        <header>
            <?php
            include __DIR__.'/template/_navbar.html';
            ?>
        </header>
        
        <?php
        //include configuration file to declare database connection
        include __DIR__.'./config.php';
        
        //create database connection
        $connection= connect_db();
        
        //get current date
        $currentdate= date_create(date("Y-m-d"));
       
        ?>
        
        <div class="col-sm-12 row">
            <?php
            $avatar=array('Maria','Louis','Alain','Ananova');
            foreach($avatar as $currentavatar){
                /*
                 * declare variables
                 */
                $status=0;
                $target=1;
                $last_record="";
                
                //echo $currentdate;
                /*
                 * for each person, make the difference between current date and last login date
                 */
                //get last record date
                $query="select date from log as last_date where user='$currentavatar' order by id DESC limit 1";
                
                
                //echo $query."<br>";
                $prepare=$connection->query($query);
                
                $result=$prepare->fetch();
                $last_record=$result[0];
                
                echo "<br>";
                echo date_diff( $last_record, $currentdate);
                
                
                
                
            }
            
            
            
            ?>
            
            <div class="col-sm-6 avatar_div" >
                
            </div>
            <div class="col-sm-6" id="avatar_information">
                
            </div>
        </div>
        
    </body>
</html>