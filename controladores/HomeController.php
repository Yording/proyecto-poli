<?php

 class HomeController extends MasterController {

    public function getHome()
    {
      Session::validate('Home');
    }
  
    // {
    //        header("location:Sesiones.php?action=logout");
    // }
 }

    // if(isset($_GET['action']))
    // {
    // $action=$_GET['action'];
    // if($action=='iniciar_sesion')
    // {
    //    $isPost=count($_POST)>0;
    //    IF($isPost){
    //        var_dump($_POST);
    //    }
    //    else { 
    //         require './Vistas/Home.php';
    //     }
       
    // }
    // else if($action=='cerrar_sesion')
    // {
    //        header("location:Sesiones.php?action=logout");
    // }
    // }
    // else
    // {
      
    //     if(isset($_SESSION['usuario']))
    //     {
    //       header("location:Homes.php?action=iniciar_sesion");
    //     }
    // }
