<?php
/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 13.02.2017
 * Time: 17:05
 */

namespace App;


class Db
{
use Singleton;

    protected $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=iac;', 'root', 'obla4ko');
    }

    public function execute($sql, $params = []){
        print_r($params);
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }

    public function query($sql, $class){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();

        if(false !== $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}