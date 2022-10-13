<?php
require 'app/helpers.php';
require 'app/Task.php';
$task = new Task(1, "pan", "fariña", 0);

//VAR_DUMP($_GET[]);
//$name='ams';
$user = 'debian-sys-maint';
$pass = 'Xf5wnAVForkHYjWE';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=phpams', $user, $pass);
} catch (\Exception $ex) {
    echo 'error amb la bd';
}

$statement= $dbh->prepare('SELECT * FROM task;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($tasks);
$greeting = greet();
