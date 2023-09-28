<?php
 require "./config.php";

 $id=$_GET["id"];
 $nom=$_GET["nom"];
 $old=$_GET["old"];
 $email=$_GET["email"];
 $code=$_GET["code"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
    <title>update</title>
</head>
<body>
<form action="modify.php" method="post">
<label for="name">ID</label>
    <input type="text" name="id" value="<?php echo $id; ?>">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo $nom; ?>">
    <label for="old">Old</label>
    <input type="text" name="old" value="<?php echo $old; ?>">
    <label for="email">Email</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <label for="code">Code</label>
    <input type="text" name="code" value="<?php echo $code; ?>">
    <input type="submit" value="update" name="update">
  </form>
</body>
</html> 
<?php

 if(isset($_POST["update"])){
$id=$_POST["id"];
 $nom=$_POST["name"];
 $old=$_POST["old"];
 $email=$_POST["email"];
 $code=$_POST["code"];
    $statement=$conn->prepare("UPDATE table_user set nom=?,old=?,email=?,code=? WHERE id=? ");
    $statement->bindParam(1,$nom);
    $statement->bindParam(2,$old);
    $statement->bindParam(3,$email);
    $statement->bindParam(4,$code);
    $statement->bindParam(5,$id);

 $statement->execute();
 header('Location: read.php');

 }

?>