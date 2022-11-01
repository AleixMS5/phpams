<?php require '../resources/views/layout/html_header.blade.php'?>
<?php require '../resources/views/layout/nav.blade.php'?>
<h1 style="color: blue"><?=$greeting;?></h1>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php foreach ($users as $user): ?>

    <tr>
        <td><?=$user->id; ?></td>
    <td><?=$user->name; ?></td>
    <td><?=$user->email; ?></td>
    </tr>
    <?php endforeach; ?>


</table>

<?php require '../resources/views/layout/footer.blade.php'?>