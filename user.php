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
        <link type="text/css" rel="stylesheet" media="screen" href="css/index.css?v=<?php time()?>">
        <link type="text/css" rel="stylesheet" media="screen" href="css/user.css?v=<?php time()?>">
    </head>
    <body>
        <header>
            <?php
            include __DIR__.'/template/_navbar.html';
            ?>
        </header>
        
        
        
        <?php
        //check if user name is passed on 
        if(!empty($_GET['user'])){
            
            //include configuration file
            include __DIR__.'/config.php';
            
            //create database connection
            $connection= connect_db();
            
            //get variable passed by GET method
            
            $user=$_GET['user'];
            
            $check='undefined.png';
            //read dir to check if we have any image
            $dir="./img/users";
            //open directory and read its contents
            if(is_dir(($dir))){
                if ($dh = opendir($dir)){
                  while (($file = readdir($dh)) !== false){
                     
                    if(strtolower($file)=== strtolower($_GET['user']).'.png'){
                        
                        $check=$file;
                    }   
                  }
                  closedir($dh);
                }

            }else{
                echo "<br>error: cannot open user directory";
            }
            ?>
            <h1>Les 10 dernières connexions de <b><?php echo ucfirst($user)?></b></h1>
            
            <div class="row col-sm-12">
                <div class="col-sm-6 avatarDiv" >
                    <div class="col-sm-12 avatar">
                        <img alt="<?php echo ucfirst($check)?>" title="<?php echo ucfirst($check)?>" src="img/users/<?php echo $check?>" width="225">
                        <br>
                        
                        <h4 style="color: black"><?php echo ucfirst($user)?></h4>
                        <div class="col-sm-12 helpDiv">
                            
                            <?php
                            /*
                             * Make the difference between the database date and the current date
                             */
                            
                            $target=3;//number of days(max) required to trigger un help message
                            
                            $query="select datediff(curdate(), (select date from log where user='$user' order by id DESC limit 1)) from log order by id DESC limit 1";
                            $prepare=$connection->query($query);
                            //echo $query;
                            $result=$prepare->fetch();

                            //print_r($result);
                            $target_db=$result[0];
                            
                            
                            
                            //show help message if target day was depassed 
                            if($user=='carole'){
                                ?>
                            <img alt="attention" title="Attention" src="img/attention.png" width="75" >
                            <br>
                            <p><b><?php echo ucfirst($user)?></b>  n'est pas sortie depuis <b><u><?php echo $target_db?></u></b> jours!</p>
                           
                            <p>
                                Voulez-vous envoyer un <b>Helper</b>?  
                            </p>
                            <br>
                            <input type="button" value="Envoyer" id="btn">
                                <?php
                            }                            
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 connectDiv" >
                    
                    <table>
                        <tr>
                            <td>Date</td>
                            <td>Heure</td>
                        </tr>
                    
                    <?php
                    $check=str_replace('.png', '', $check);
                    //get last 10 connections for current user
                    $query="select date, time from log where user='$check' order by id DESC limit 10";
                    foreach($connection->query($query) as $row){
                        ?>
                        <tr>
                            <td><?php echo $row[0]?></td>
                            <td><?php echo $row[1]?></td>
                        </tr>
                        <?php
                    }
                    
                    
                    ?>
                    </table>
                </div>
            </div>    
            <?php
            /*
             * get last 10 connection from selected user
             */
           
            
            
            
        }else{
            ?>
            <script>
            window.open('index.php', '_self');
            </script>
            <?php
        }
        
        
            
       
        include __DIR__.'/template/_footer.php'
        ?>
    </body>
</html>