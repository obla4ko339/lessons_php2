<?php
/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 14.02.2017
 * Time: 9:47
 */

namespace App\Models;
use App\Db;
use App\Model;


class User extends Model
{

    const TABLE = 'user';

    public $name;
    public $email;

 
}