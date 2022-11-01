<?php require '../resources/views/layout/html_header.blade.php'?>
<?php require '../resources/views/layout/nav.blade.php'?>


<table class="table">
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

<?php require '../resources/views/layout/footer.blade.php'?>