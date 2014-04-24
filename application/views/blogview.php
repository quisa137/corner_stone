<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1><?=$heading?></h1>

    <h3>My Todo List</h3>
    <ul>
    <?php foreach($todo_list as $item):?>
    <li><?=$item?></li>
    <?php endforeach;?>
    </ul>
</body>
</html>