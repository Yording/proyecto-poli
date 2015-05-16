<?php

class View{
    
    public static function load($path, $data = []){
        extract($data);   //every key now is a variable :)
        require "./" . BASE_VIEWS . "/$path.php";
    }
        
}