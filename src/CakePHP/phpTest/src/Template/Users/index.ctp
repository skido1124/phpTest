<!DOCTYPE html>
<html>
    <head>
        <title>CakePHP</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <ul>
                <?php foreach ($users as $user): ?>
                <li>id:<?= h($user->id) ?> name:<?= h($user->name) ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </body>
</html>
