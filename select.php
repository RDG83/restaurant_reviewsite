<?php

require_once "./db_connection.php";

$query = "SELECT * FROM `users` WHERE 'ID' = 1;";

$statement = $pdo->query('SELECT name FROM users');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php while ($row = $statement->fetch()) {
        echo $row['name'] . "<br>";
    } ?>

    <a href="index.php">Index</a>

</body>

</html>