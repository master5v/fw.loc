<?php
namespace app\controllers;

class Main
{
    public function indexAction(){
        echo __METHOD__;
        echo ' krut<br>';
    }

    public function __construct($arr)
    {
        debug($arr);
    }
}