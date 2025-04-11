<?php

class App{
    protected $controller="HomeController";
    protected $action="index";
    protected $params=[];

    public function __construct()
    {
        $this->prepareUrl();
        $this->render();
    }

    private function prepareUrl(){
        $url=$_SERVER['QUERY_STRING'];
        if(!empty($url)){
            $url=trim($url,"/");
            $url=explode("/",$url);
            $this->controller = isset($url[0])?ucwords($url[0])."Controller":"HomeController";
            $this->action = isset($url[1])?$url[1]:"method";
            unset($url[0],$url[1]);
            $this->params = !empty($url)? array_values($url) : [];
            // var_dump($this->params);
            
        }
    }

    private function render(){
            if(class_exists($this->controller))
            {
                $controller = new $this->controller;
                // check if methos is exist
                if(method_exists($controller,$this->action))
                {
                    call_user_func_array([$controller,$this->action],$this->params);
                }
                else 
                {
                    echo "Method : " . $this->action ." does not Exist";
                }
            }
            
            else 
            {
                echo "Class : ".$this->controller." Not Found";
             
            }  
            
        }
    
}

