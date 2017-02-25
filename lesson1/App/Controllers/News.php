<?php
/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 17.02.2017
 * Time: 15:12
 */

namespace App\Controllers;
use \App\Models\User;

class News
{

    private $view;
    public function __construct()
    {
        $this->view = new \App\View();
    }

    public function action($action)
    {
        $method = 'action'.$action;
        $this->beforeAction();
        return $this->$method();
    }

    protected  function beforeAction()
    {
        echo "Счетчик";
    }

    public function actionIndex()
    {
        $this->view->title = "Мой сайт крутой";
        $this->view->users = User::findAll();
        echo $this->view->render(__DIR__.'/../templates/index.php');
    }
    protected function actionOne(){
        $id = (int)$_GET['id'];
        $this->view->article = User::findById($id);
    }

}