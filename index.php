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
        
        <link type="text/css" rel="stylesheet" href="css/index.css?v=<?php time()?>">
        
    </head>
    <body>
        <?php
        
        //include configuration file
        include __DIR__.'/config.php';
        
        //create database method
        $connection= connect_db();
        
        if(isset($_POST['id'])){
            $message ="";
            $user="";
            if(!empty($_POST['id'])){
                $message=$_POST['id'];
                $user=$_POST['id'];
            } else {
                $message="Error: page called but id is empty";
                $user=0;
            }
    
    
    
            
            
            //create switch condition to check for each id -> user
            switch ($user) {
                case 'B7F7506676':
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
                echo "record added $user";
            }else{
                echo"Error: this record wasn't added $insert";
            }    
        }
        
        
        ?>
        
        <header>
            <?php
            include __DIR__.'/template/_navbar.html';
            ?>
        </header>
        
        <div class="col-sm-12 row main">
            
            <h1>Les 5 dernières connexion </h1>
            <table>
                <tr>
                    <td>Utilisateur</td>
                    <td>Date</td>
                    <td>Heure</td>
                </tr>
            <?php
            /*
             * get the last 10 connnection from database
             */
            
            
            //create mysql query
            $query="SELECT date , time , user, datediff(curdate(),date) as dif FROM log ORDER BY id DESC LIMIT 5";
            
            //create status variable to check if user need help or not
            $target=2;  
            foreach($connection->query($query) as $row){
                
                ?>
                <tr onclick="window.open('user.php?user=<?php echo $row[2]?>', '_self');">
                    <td>
                        <img alt="picture of: <?php echo ucfirst($row[2])?>" title="<?php echo $row[2]?>" src="img/users/<?php echo $row[2]?>.png" width="150">
                        <p>
                        <h4><?php echo ucwords($row[2])?></h4>
                        </p>
                    </td>
                    <td class="date">
                        <?php echo $row[0]?>
                    </td>
                    <td class="time">
                        <?php echo $row[1]?>
                    </td>
                </tr>
                <?php
                
            }
            
            ?>
            
            </table>
        </div>
        <?php 
        //include footer
        include __DIR__."/template/_footer.php";
        ?>
    </body>
</html>

<script>
setTimeout(function(){
    location.reload();
}, 3000);
</script>

