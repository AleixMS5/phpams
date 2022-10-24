<?php
function greet(){
return  "hola ams";

}
function connectDB($config){
    try {
       return new PDO($config['database']['databasetype'].':host='.$config['database']['host'].';dbname='.$config['database']['name'],
        $config['database']['user'],
           $config['database']['password']);
    } catch (\Exception $ex) {
        echo $ex;
    }
}

function fetchAllTasks($dbh){
    $statement= $dbh->prepare('SELECT * FROM tasks;');
    $statement->execute();
    return $tasks = $statement->fetchAll(PDO::FETCH_CLASS,'task');

}
