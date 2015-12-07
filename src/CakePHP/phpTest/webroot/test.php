<?php

function getUsers()
{
    try {
        $pdo = new PDO('mysql:dbname=test;host=192.168.33.10', 'root', 'adminadmin');
    } catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }

    $st = $pdo->query('SELECT * FROM users ORDER BY id LIMIT 100');
    while($row = $st->fetch(PDO::FETCH_ASSOC)) {
        echo '<li>id:' . $row['id'] . ' name:' . $row['name'] . '</li>';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<div class="container">
    <div class="content">
        <ul>
            <?= getUsers(); ?>
        </ul>
    </div>
</div>
</body>
</html>
