<?php
   class LoginController extends MasterController {

     static $modelo = 'LoginModel';
    public function getIngresar() {
        Session::start();
        if(isset($_SESSION['usuario']))
        {
            Redirect::to('index.php?controller=Home&action=Home');
        }
        else
        {
           View::load('index');
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
                      Redirect::to('index.php?controller=Home&action=Home');
                 }
                 else
                 {
                      Redirect::to('index.php?controller=Login&action=Ingresar');
                 }
              }
             else
             {
                Redirect::to('index.php?controller=Login&action=Ingresar');
             }
    }
    public function getEliminar() {
         if(isset($_GET['id']))
          {
              $id = $_GET['id'];
              EstudianteModel::eliminar($id);
          }
          Redirect::to('index.php?controller=Estudiante&action=registrar');
    }
     public function getActualizar() {
          if(isset($_GET['id']))
           {
              $id = $_GET['id'];
              $data['estudiantes_up'] = EstudianteModel::find($id);
              $estudiantes_up=$data['estudiantes_up']->fetch_assoc();
              $data['carreras']=CarreraModel::getall_actualizar($estudiantes_up['id_carrera']);
              $data['students']=LibController::Zebra_Pagination('EstudianteModel');;
              $data['estudiantes_up']=$estudiantes_up;
              View::load('Include/Header', $data);
              View::load('Estudiante', $data);
              View::load('Include/Footer', $data);
          }
          else
          {
            Redirect::to('index.php?controller=Estudiante&action=registrar');
          }
    }
    public function getCerrarSesion()
    {
       Session::destroy();
        Redirect::to('index.php?controller=Login&action=Ingresar');
    }
    public function getIndex() {
        echo "voy al index<br>";
    }

}
