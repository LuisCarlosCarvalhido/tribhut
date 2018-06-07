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
        <link type="text/css" rel="stylesheet" href="css/community.css?v=<?php time()?>">
        
    </head>
    <body>
        <header>
            <?php
            include __DIR__.'/template/_navbar.html';
            ?>
        </header>
        
        <div class="col-sm-12 row main">
            
            <h1>Communauté...</h1>
            
        </div>
        <div class="col-sm-12 community">
             <img alt="community logo" title="tribHut Community" src="img/community.png" width="325">
        </div>
        <div class="col-sm-12 form">
             
            Utilisateur :  <input type="text" size="15" name="username" placeholder="username">
             <br>
             Mot de passe: <input type="password" size="15" name="password" placeholder="password">
             <br>
             <br>
             <input type="button" value="Connecter" id="btn">
             
        </div>
        <?php 
        //include footer
        include __DIR__."/template/_footer.php";
        ?>
    </body>
</html>



