<?php
require 'app/helpers.php';
require 'app/Task.php';
$task = new Task(1);

//VAR_DUMP($_GET[]);
//$name='ams';
$user = 'debian-sys-maint';
$pass = 'Xf5wnAVForkHYjWE';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=phpams', $user, $pass);
} catch (\Exception $ex) {
    echo $ex;
}

$statement= $dbh->prepare('SELECT * FROM task;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');
var_dump($tasks);

$greeting = greet();








