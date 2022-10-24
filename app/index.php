<?php

use app\framework\Database;

require 'app/config.php';
require 'app/helpers.php';
require 'app/Models/Task.php';
require 'framework/Database.php';
require 'framework/connection.php';
//$task = new Task(1);

//VAR_DUMP($_GET[]);
//$name='ams';
//
//$user = 'debian-sys-maint';
//$pass = 'Xf5wnAVForkHYjWE';
//$dsn = 'mysql:host=localhost;dbname=phpams';

$database = new Database($config);

$tasks =$database->selectAll('tasks');//crida estatica

$greeting = greet();








