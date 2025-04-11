<?php

class Productcontroller{
    public function index(){
        $product =new Product();
        $data['products']=$product->getAllProducts();
        View::load('product/index',$data);
    }

    public function add(){
        View::load('product/add');
    }


    public function store(){

        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $price=$_POST['price'];
            $description=$_POST['description'];
            $qty=$_POST['qty'];


            $data = Array("name"=>$name,
                           "price"=>$price,
                           "description"=>$description,
                           "qty"=>$qty
            );

            $db = new Product();
            if($db->insertproduct($data))
            {
                View::load("product/add",["success"=>"Data Created Sucessessfully"]);
            }

            
        }
        else{
            View::load("product/add",["error"=>"error"]);
        }
    }

    public function delete($id){
        $db=new product();
        if($db->deleteProduct($id)){
            View::load('product/delete');

        }else{
            echo "error";
        }
    }


}