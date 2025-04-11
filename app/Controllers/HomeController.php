<?php
class HomeController{
    public function index(){
        // echo $id;
        //   echo "this class is : ".__CLASS__." and method is : ".__METHOD__;
        // $data['title']="HOME PAGE";
        // $data['content']="Content Of Home Page";
         View::load('home');
    }
}

