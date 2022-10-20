<?php
function greet(){
return  "hola ams";

}
function connectDB($config){

       return new PDO($config['database']['databasetype'].':host='.$config['database']['host'].';dbname='.$config['database']['name'],
        $config['database']['user'],
           $config['database']['password']);

}
