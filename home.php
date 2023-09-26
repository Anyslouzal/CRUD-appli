<?php
 $conn = new mysqli("localhost:3306","root" , "");

 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 echo "Connected successfully";

 $name=$_POST["name"];
 $old=$_POST["old"];
 $email=$_POST["email"]; 
 $code=$_POST["code"];

 $sql="INSERT INTO table_user (name, old, email, code) VALUES ($name, $old, $email, $code);"
 
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  
?>