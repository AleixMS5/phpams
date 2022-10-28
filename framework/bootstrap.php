<?php

use framework\App;
use Framework\Database\Connection;
use Framework\Database\Database;


App::bind('config', require 'config.php');

App::bind('database', new Database(

    connection::make(App::get('config')['database'])
));