<?php
require 'app/config.php';
require 'app/helpers.php';
require 'app/Task.php';

$task = new Task(1);

//VAR_DUMP($_GET[]);
//$name='ams';
//
//$user = 'debian-sys-maint';
//$pass = 'Xf5wnAVForkHYjWE';
//$dsn = 'mysql:host=localhost;dbname=phpams';
$tasks = fetchAllTasks(connectDB($config));


$greeting = greet();








