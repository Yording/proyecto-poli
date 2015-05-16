<?php

class Lib{
    
    public static function load($path){
        require_once "./" . BASE_LIBS . "/$path.php";
    }
        
}