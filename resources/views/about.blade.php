<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="/tasks">tasques</a></li>
        <li><a href="/users">users</a></li>
        <li><a href="/contact">contact</a></li>
        <li><a href="/about">about</a></li>
        <li><a href="/index">home</a></li>
    </ul>
</nav>
<h1 style="color: blue"><?=$greeting;?></h1>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>completed</th>
    </tr>
    <?php foreach ($tasks as $task): ?>

    <tr>
        <td><?=$task->id; ?></td>
    <td><?=$task->title; ?></td>
    <td><?=$task->description; ?></td>
    <td><?=$task->completed; ?></td>
    </tr>
    <?php endforeach; ?>


</table>
About here
</body>
</html>
