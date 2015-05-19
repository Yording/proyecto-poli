<?php

class UsuarioController extends MasterController {

      private static $modelo = 'UsuarioModel';
      private static $nomArray="usuarios_up";
      private static $link='index.php?controller=Usuario&action=registrar';

    public function getRegistrar() {
        $data['usuarios']=LibController::Zebra_Pagination(static::$modelo);
         Session::validatePage('Usuario', $data);
    }

     public function postActualizar($request) {
        $action=$request['crud'];
        $data=['id_documento' => $request['identificacion'],
        'usuario' => $request['user'],
        'password' =>$pass=($request['pass']=="")?"A".$request['identificacion']."*":$request['pass']];
        UsuarioModel::actualizar($data);
        Redirect::to(static::$link);
    }

     public function getActualizar() {
          if(isset($_GET['id']))
           {
              $id = $_GET['id'];
              $rol=$_GET['rol'];
              $data[static::$nomArray] = ($rol=="Estudiante") ? EstudianteModel::find($id):DocenteModel::find($id);
              $usuarios_up=$data[static::$nomArray]->fetch_assoc();
              $data['usuarios']=LibController::Zebra_Pagination(static::$modelo);;
              $data[static::$nomArray]=$usuarios_up;
               Session::validatePage('Usuario', $data);
          }
          else
          {
            Redirect::to(static::$link);
          }
    }

}