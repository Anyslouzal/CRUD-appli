<?php
require "./config.php"; // Include your database configuration file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
</head>
<body>
  <form action="create.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="old">Old</label>
    <input type="text" name="old">
    <label for="email">Email</label>
    <input type="text" name="email">
    <label for="code">Code</label>
    <input type="text" name="code">
    <input type="submit" value="Add" name="add">
  </form>

  <?php
  if(isset($_POST["add"])){
    $name = $_POST["name"];
    $old = $_POST["old"];
    $email = $_POST["email"];
    $code = $_POST["code"];

    $statement = $conn->prepare("INSERT INTO table_user (nom, old, email, code) VALUES (?, ?, ?, ?)");
    $statement->bindParam(1,$name);    
    $statement->bindParam(2,$old);
    $statement->bindParam(3, $email);
    $statement->bindParam(4,$code);


    if ($statement->execute()) {
      echo "User added successfully.";
    } else {
      echo "Error: " . $conn->error;
    }
  }
  ?>

</body>
</html>
