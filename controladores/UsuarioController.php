<?php

class UsuarioController extends MasterController {

      private static $modelo = 'UsuarioModel';
      private static $nomArray="usuarios_up";
      private static $link='index.php?controller=Usuario&action=registrar';
      private static $view='Usuario';
      private static $tableArray='usuarios';

    public function getRegistrar() {
        $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);
         Session::validatePage(static::$view, $data);
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
              $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);;
              $data[static::$nomArray]=$usuarios_up;
               Session::validatePage(static::$view, $data);
          }
          else
          {
            Redirect::to(static::$link);
          }
    }

}