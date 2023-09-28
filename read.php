<?php
 require "./config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">

    <title>Document</title>
</head>
<body>
    <table>
        <thead>
           <tr>
            <th>id</th>
            <th>name</th>
            <th>old</th>
            <th>email</th>
            <th>code</th>
            <th>
                action 
            </th>
           </tr>
        </thead>
        <tbody>
            <?php
            $statement = $conn->prepare("SELECT * from table_user");
            $statement-> execute();
            $data=$statement->fetchAll();

            foreach($data as $row)
                echo" <tr>
                 <td>".$row['id']."</td>
                 <td>".$row['nom']."</td>
                 <td>".$row['old']."</td>
                 <td>".$row['email']."</td>
                 <td>".$row['code']."</td>
                 <td><a href='modify.php?id=".$row['id']."&nom=".$row['nom']."&old=".$row['old']."&email=".$row['email']."&code=".$row['code']."'>update</a>
                 <a href='delete.php?id=".$row['id']."'>delete</a>
                 </td>
                </tr>"
            ?>
        </tbody>
    </table>
</body>
</html>