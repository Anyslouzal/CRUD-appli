<?php
 require "./config.php";

$id=$_GET["id"];

 $statement = $conn->prepare("DELETE FROM table_user WHERE id=$id");
 $statement->execute();

 header('Location: read.php');
?>