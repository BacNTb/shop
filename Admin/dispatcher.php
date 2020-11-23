<?php

namespace Mvc;

use Mvc\request;

use Mvc\Router;

use Mvc\Controllers\AdminsController;

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new request\Request();
        $Router = new Router\Router();
        $Router::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name1 = $this->request->controller;

        $name = "\Mvc\Controllers\\" . $name1 . "Controller";
        $file = ROOT . 'Controllers/' . $name1 . 'Controller.php';
        
        require($file);
        $controller = new $name();
        return $controller;
    }

}
?>