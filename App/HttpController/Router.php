<?php


namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\AbstractRouter;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use FastRoute\RouteCollector;
use EasySwoole\HttpAnnotation\Utility\Scanner;

class Router extends AbstractRouter
{
    function initialize(RouteCollector $routeCollector)
    {
        $scanner = new Scanner();
        $scanner->mappingRouter($routeCollector, EASYSWOOLE_ROOT . '/App/HttpController', 'App\HttpController');
    }
}