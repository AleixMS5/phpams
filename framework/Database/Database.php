<?php

namespace Framework\Database;

use app\Models\Task;
use framework\App;
use PDO;

class Database
{

protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public  function  selectAll($table)
    {
//        $dbh =  $this->connection->connectDB(App::get('config'));
        $statement = $this->pdo->prepare("SELECT * FROM $table;");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, Task::class);

    }

    function insert()
    {
        // TODO
    }
}