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
