<?php
error_reporting(-1);
//require_once "../app/controllers/Test.php"; exit();

use vendor\core\Router;
$query = rtrim($_SERVER['QUERY_STRING'],'/');

 define('WWW', __DIR__);
 define('ROOT',dirname(__DIR__));
 define('CORE',ROOT . '/vendor/core');
 define('APP',ROOT . '/app');

require_once "../vendor/libs/functions.php";


spl_autoload_register(function ($class){
  $file = ROOT . '/'. str_replace('\\','/',$class) . '.php';
    if (is_file($file)){
        require_once $file;
    }
});

Router::add('^$',['controller' => 'Main', 'action' =>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);