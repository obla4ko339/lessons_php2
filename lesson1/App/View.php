<?php
/**
 * Created by PhpStorm.
 * User: grabvn
 * Date: 16.02.2017
 * Time: 14:21
 */

namespace App;


class View implements \Countable
{
    protected $data = [];

    /**
     * @param $k
     * @param $v
     */
    public function __set($k, $v)
    {
       $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }


    /**
     * @param $template
     * @return string
     */
    public function render($template){
        ob_start();
        foreach($this->data as $prop=>$value){
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    /**
     * @param $template String Путь к шаблону
     */
    public function display($template){
        echo $this->render($template);
    }


    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->data);
    }
}