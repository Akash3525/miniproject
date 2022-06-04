<?php
$host="localhost";
$dbname1="plasma_donation";
$unamec="root";
$passc="";
$db1="mysql:host=$host;dbname=$dbname1";
try{
    $db=new PDO($db1,$unamec,$passc);
}
catch(PDOException $error)
{
    echo $error->getCode();
}
 ?>