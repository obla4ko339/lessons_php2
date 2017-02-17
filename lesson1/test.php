<?php
require __DIR__."/autoload.php";
use App\Singleton;

$s = Singleton::instance();
$s->counter = 1;
var_dump($s);


$s = Singleton::instance();
$s->counter = 1;
var_dump($s);
?>