<?php
   class LoginController extends MasterController {

     private static $modelo = 'LoginModel';
     private static $nomArray="estudiantes_up";
     private static $link='index.php?controller=Login&action=Ingresar';
     private static $linkHome='index.php?controller=Home&action=Home';
     private static $view='index';
     private static $tableArray='login';
    public function getIngresar() {
        Session::start();
        if(isset($_SESSION['usuario']))
        {
            Redirect::to(static::$linkHome);
        }
        else
        {
           View::load(static::$view);
        }
    }

    public function postValidate($request) {
            $data=['usuario' => $request['usuario'],
        'pass' => $request['pass'],
        'rol' => $request['role']];
            if($data['usuario']!='null' & $data['pass']!='null')
              { 
                 $login["sesion"]=SesionModel::ingresar($data);
                 if(isset($login) && $login!=false)
                 {
                      $Var=$login["sesion"]->fetch_assoc();
                      Session::start();
                      Session::addVar('usuario',$Var['usuario']);
                      Session::addVar('profile',$Var['nombre_completo']);
                      Session::addVar('rol',$Var['id_rol']);
                      Redirect::to(static::$linkHome);
                 }
                 else
                 {
                      Redirect::to(static::$link);
                 }
              }
             else
             {
                Redirect::to(static::$link);
             }
    }
    public function getCerrarSesion()
    {
       Session::destroy();
        Redirect::to(static::$link);
    }
}
