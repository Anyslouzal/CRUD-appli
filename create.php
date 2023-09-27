<?php
require "./config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create user</title>
</head>
<body>
  <form action="create.php" method="post">
  <label for="name">name</label>
    <input type="text" name="name">
    <label for="name">old</label>
    <input type="text" name="old">
    <label for="name">email</label>
    <input type="text" name="email">
    <label for="name">code</label>
    <input type="text" name="code">
    <input type="submit" value="add">
  </form>
</body>
</html>

<?php
$name=$_POST["name"];
$old=$_POST["old"];
$email=$_POST["email"];
$code=$_POST["code"];

$sql="INSERT INTO table_user ()"

?>