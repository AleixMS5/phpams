<?php
namespace app\framework;
use PDO;

class connection
{
    private $config;

    /**
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    function connectDB(){
    try {
        return new PDO($this->config['database']['databasetype'].':host='.$this->config['database']['host'].';dbname='.$this->config['database']['name'],
            $this->config['database']['user'],
            $this->config['database']['password']);
    } catch (\Exception $ex) {
        echo $ex;
    }
}

}