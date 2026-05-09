<?php
namespace  Router;
class Router
{
private array $routes=[];
public function addRoute($method,$url,$controller,$action):void {
    $this->routes[$method][$url]=[
        'controller' =>$controller,
        'action' => $action
    ];
}
public function match($url,$method):array {
    $values=[];
    if (isset($this->routes[$method]) && array_key_exists($url,$this->routes[$method])) {
        $values['controller'] = $this->routes[$method][$url]['controller'];
        $values['action'] = $this->routes[$method][$url]['action'];
    }
    return $values;
}


}
