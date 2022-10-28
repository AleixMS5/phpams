<?php

namespace app\framework;

use app\framework\connection\connectDB;
use app\Models\Task;
use PDO;

class Database
{

    public $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->connection = new connection($config);
    }


    function selectAll($table)
    {

        $dbh = $this->connection->connectDB($this->config);
        $statement = $dbh->prepare("SELECT * FROM $table;");
        $statement->execute();
        return $tasks = $statement->fetchAll(PDO::FETCH_CLASS, Task::class);


        // return fetchAllTasks($this->connection->connectDB($this->config));
    }




}