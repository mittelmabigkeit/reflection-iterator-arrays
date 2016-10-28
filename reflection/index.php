<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 28.10.2016
 * Time: 14:59
 */

require_once 'Foo.php';

$classname = "Foo";

call_user_func(array($classname, 'say_hello'));
call_user_func($classname .'::say_hello'); // Начиная с версии 5.2.3
call_user_func('Foo::say_hello'); //ya dobavil

$myobject = new Foo();

call_user_func(array($myobject, 'say_hello'));

?>