<?php

var_dump($_SERVER['REQUEST_URI']);

require __DIR__."/autoload.php";

use \App\Models\User;



$controller = new \App\Controllers\News();
$controller->action('Index');




