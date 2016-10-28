<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 28.10.2016
 * Time: 15:17
 */

require_once "Base.php";

$obj = new Base();  /*создаем объект на базе класса*/
///* сложение*/
////$obj->summa(2,3);
//echo "<br/>";
//echo $obj->showres();
$arr = array(5,5);
call_user_func_array(array(&$obj,"summa"),$arr);
echo call_user_func(array(&$obj,"showres"));
/* умножение*/
//$obj->umn(2,3);
//echo "<br/>";
//echo $obj->showres();
echo "</br>";
$arr = array(5,5);
call_user_func_array(array(&$obj,"umn"),$arr);
echo call_user_func(array(&$obj,"showres"));
/* вычитание*/
//$obj->minus(2,3);
//echo "<br/>";
//echo $obj->showres();
echo "</br>";
$arr = array(5,5);
call_user_func_array(array(&$obj,"minus"),$arr);
echo call_user_func(array(&$obj,"showres"));
/* деление*/
//$obj->delenie(6,3);
//echo "<br/>";
//echo $obj->showres();
echo "</br>";
$arr = array(5,5);
call_user_func_array(array(&$obj,"delenie"),$arr);
echo call_user_func(array(&$obj,"showres"));
?>