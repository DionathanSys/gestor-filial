<?php 

namespace app\core;

use app\routes\Routes;
use app\support\RequestTypes;
use app\support\Uri;

class RoutersFilter
{   
    private string $uri;
    private string $method;
    private array $routesRegistered;

    public function __construct()
    {
        $this->uri = Uri::get();
        $this->method = RequestTypes::get();
        $this->routesRegistered = Routes::get();
    }

    public function simpleRouter()
    {
        if(array_key_exists($this->uri,$this->routesRegistered[$this->method])){
            return $this->routesRegistered[$this->method][$this->uri];
        }

        return 'NotFoundController@index';

    }

    public function dynamicRouter()
    {
        
    }
}
