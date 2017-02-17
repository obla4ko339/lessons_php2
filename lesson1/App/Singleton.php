<?php
/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 15.02.2017
 * Time: 10:56
 */

namespace App;


trait Singleton
{
    public $counter;

    protected static $instance;
    protected function __construct(){}
    public static function instance(){
        if(null == static::$instance){
            static::$instance = new static;
        }
        return static::$instance;

    }
}