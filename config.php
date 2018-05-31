<?php
define('USER', "root");
define('PASSWD', "");
define('SERVER', "localhost");
define('BASE',"tribhut");
define('CHARSET', "UTF-8");


/* 
 * Hutchinson property.
 * This site is the property of Hutchinson and mustn't be diffused without his express permission.
 * Luis Carvalhido
 */

////strat session
//session_start();
	

//function to create a USER database connection 
function connect_db(){
    $dsn="mysql:dbname=".BASE.";host=".SERVER;
    try{
        $connexion=new PDO($dsn, USER, PASSWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        //echo "connexion ok...";
    } catch (Exception $ex) {
        printf( 'Fatal Error: Cannot do the connection to the database');
        printf($ex->getMessage());
    }
    return $connexion;
}

