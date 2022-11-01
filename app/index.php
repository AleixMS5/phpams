
<?php

use Framework\App;
use Framework\Database\Database;

require '../config.php';






//WISHFUL PROGRAMMING


$tasks = App::get('database')->selectAll('tasks');










