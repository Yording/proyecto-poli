<?php

class Session{
    
    private static $userVar='usuario';
    private static $linkIndex="index.php?controller=Login&action=Ingresar";
   
    public static function start(){
       session_start();
    }
    // agregar variable de Sesion 
    public static function addVar($varNombre,$varValor){
       $_SESSION[$varNombre]=$varValor;
    }  
    // Eliminar variable de Sesion
    public static function deleteVar($varNombre){
        
    	 // var_dump($varNombre);
      // exit;
        unset($_SESSION[$varNombre]);
    }  
    public static function deleteAllVar()
    {
        Session::start();
       session_unset (); 
    }
    public static function validate($view)
    {
        Session::start();
         if(isset($_SESSION[static::$userVar]))
        {
             View::load($view);
        }
        else
        {
           Redirect::to(static::$linkIndex);
        }
    }
     public static function validatePage($view,$data)
    {
        Session::start();
         if(isset($_SESSION[static::$userVar]))
        {
             View::loadPage($view,$data);
        }
        else
        {
           Redirect::to(static::$linkIndex);
        }
    }
    public static function destroy(){
       
       Session::deleteAllVar();
       session_destroy();

    }
    // returna el valor de una variable de session
     public  function returnVar($varNombre){
        if (!isset($_SESSION[static::$userVar]))
        {
            Session::start();
        }
       return $_SESSION[$varNombre];
    }  
}