
<?php

use app\Models\Task;

function greet(){
    return  "hola ams";

}


function fetchAllTasks($dbh){
    $statement= $dbh->prepare('SELECT * FROM tasks;');
    $statement->execute();
    return $tasks = $statement->fetchAll(PDO::FETCH_CLASS, Task::class);

}
