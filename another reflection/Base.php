<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 28.10.2016
 * Time: 15:18
 */

require_once "interface.php";

class Base implements A
{
    public $res;
    /* сложение*/
    public function summa($one, $two)
    {
        $this->res = $one+$two;
    }
    /* умножение*/
    public function umn($one, $two)
    {
        $this->res = $one*$two;
    }
    /* вычитание*/
    public function minus($one, $two)
    {
        $this->res = $one-$two;
    }
    /* деление*/
    public function delenie($one, $two)
    {
        $this->res = $one/$two;
    }
    /* вывод результата*/
    public function showres()
    {
        return $this->res;
    }
}
?>