<?php
/**
 * Created by PhpStorm.
 * User: Root
 * Date: 20.12.2017
 * Time: 21:44
 */


class main implements contr {

    public function display(){
         require_once MODELS."mainModel.php";

         $html =  file_get_contents(VIEWS."main.html");
         echo $html;
    }






    public function test(){
        echo "Test";
    }

}