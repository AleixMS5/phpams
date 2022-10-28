
<?php

use Framework\App;
use Framework\Database\Database;

require 'config.php';

require 'app/helpers.php';




//WISHFUL PROGRAMMING


$tasks = App::get('database')->selectAll('tasks');


$greeting = greet();








