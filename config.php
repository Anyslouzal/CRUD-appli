<?php
$servername="localhost";
$user="root";
$pwd="";
$db_name="projet_yassine";

try{
    $conn= new PDO("mysql:host=$servername;dbname=$db_name",$user,$pwd);
    echo "connection sucessfuly";
}catch(PDOException $e){
    echo"error" . $e->getMessage();
}
?>