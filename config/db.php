<?php

class connect{
    protected function connections(){
        $pdo = new PDO("mysql:host=localhost; dbname=mvc","root","");

        return $pdo;
    }
}






?>