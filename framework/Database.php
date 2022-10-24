<?php
namespace app\framework;
use app\framework\connection\connectDB;
class Database{

public $config;

    public function __construct($config)
    {
        $this->config = $config;
     $this->connection = new connection($config);
    }


    function selectAll($table){

      return fetchAllTasks($this->connection->connectDB($this->config));
    }
}