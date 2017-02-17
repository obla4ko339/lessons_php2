<?php

require __DIR__."/autoload.php";

use \App\Models\User;
$view = new \App\View;
$view->title = "Мой сайт крутой";
$view->users = User::findAll();
echo count($view);
echo $view->render(__DIR__.'/App/templates/index.php');





