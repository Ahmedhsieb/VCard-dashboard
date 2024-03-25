<?php
namespace Ahmed\Vcard\core;

use Ahmed\Vcard\core\saas\saas_helper;

class bootstrap
{
    private $controller; // for take the controller from url
    private $method; // for take the method from url
    private $param; // for take the parameters from url

    public function __construct()
    {
        //run the url and render method when we make object from this class
        $this->url();
        $this->render();
    }


    //this method is responsible for divided the url to controller, method, and params
    private function url()
    {

        $url = explode('/', $_SERVER['QUERY_STRING'], 3);

        $this->controller = (isset($url[0]) && !empty($url[0])) ? $url[0] : (saas_helper::saas_controller()) ;
        $this->method = (isset($url[1]) && !empty($url[1])) ? $url[1] : 'index' ;
        $this->param = (isset($url[2]) && !empty($url[2])) ? explode('/', $url[2]) : [] ;

    }


    //this method will check if their controller with name or not
    //if it exists will check the method if exists will call it
    private function render()
    {
        $controller = "Ahmed\\Vcard\\controller\\{$this->controller}";

        if (class_exists($controller)){
            $controller = new $controller;

            if (method_exists($controller, $this->method)){
                call_user_func_array([$controller, $this->method], $this->param);
            }
        }

    }
    
}