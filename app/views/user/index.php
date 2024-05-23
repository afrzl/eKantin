<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>

<body>
    <h2>Data Users</h2>
    <ol>
        <li>
            <?php foreach ($data['users'] as $user) { ?>
            <ul>
                <li><?= $user['username'] ?></li>
                <li><?= $user['password'] ?></li>
            </ul>
            <?php } ?>
        </li>
    </ol>
</body>

</html>