<?php
/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 14.02.2017
 * Time: 10:56
 */

namespace App;


abstract class Model
{

    public $id;

    public static function findAll(){
        $db = Db::instance();
        return $db->query('select * from '.static::TABLE, static::class);
    }

    public function isNew(){
        return empty($this->id);
    }

    public function insert(){
        if(!$this->isNew()){
            return;
        }

        $columns = [];
        $values = [];
        foreach($this as $key=>$val){
            if("id" == $key){
                continue;
            }
            $columns[] = $key;
            $values[':'.$key] = $val;
        }
//        var_dump($values);
        $sql = 'insert into '.static::TABLE.' ('. implode(',', $columns) .') values('. implode(',', array_keys($values)) .')';
        $db = Db::instance();
        if(!$db->execute($sql, $values)){
            echo "false";
        }


    }
}