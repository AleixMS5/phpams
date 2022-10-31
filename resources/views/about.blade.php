
<?php require '../resources/views/layout/html_header.blade.php'?>
<?php require '../resources/views/layout/nav.blade.php'?>
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
<?php require '../resources/views/layout/footer.blade.php'?>
