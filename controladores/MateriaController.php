<?php

   class MateriaController extends MasterController {

     private static $modelo = 'MateriaModel';
     private static $nomArray="materias_up";
     private static $link='index.php?controller=Materia&action=registrar';
     private static $view='Materia';
     private static $tableArray='materias';

    public function getRegistrar() {
      
     
        // Session::addVar('action','delete');
        // $action=Session::validateVar('action');
        // // var_dump($action);
        // // exit;
        // if(isset($action))
        // {
        //     if($_SESSION['action']=="insertar")
        //     {
        //          View::load('Include/alerta registro');
        //     }
        //     else if($_SESSION['action']=="delete")
        //     {

        //          View::load('Include/alerta eliminar');
        //     }
        //     else if($_SESSION['action']=="actualizar")
        //     {
        //         require './vistas/Include/alerta actualizar.php';
        //     }
        //     Session::deleteVar('action');
        // }
        $data['carreras']=CarreraModel::all();
        $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);
        Session::validatePage(static::$view, $data);
    }

    public function postCreateOrUpdate($request) {
        $action=$request['crud'];
        $data=['id_materia'=>$request['id'],
        'nombre' => $request['nombre'],
        'creditos' => $request['creditos'],
        'horas' =>$request['horas'],
        'cupos' => $request['cupos'],
        'ciclo' => $request['ciclo'],
        'aula' => $request['aula'],
        'docente'=>$request['docente'],
        'carrera'=>$request['carrera'],
        'descripcion' => $request['descripcion']];
        MateriaModel::$action($data);
        $_SESSION['action']=$action;
        Redirect::to(static::$link);
    }
    public function getEliminar() {
         if(isset($_GET['id']))
          {
              $id = $_GET['id'];
              MateriaModel::eliminar($id);
              Session::addVar('action','delete');
          }
          Redirect::to(static::$link);
    }
     public function getActualizar() {
          if(isset($_GET['id']))
           {
              $id = $_GET['id'];
              $id_carrera=($_GET['carrera']!="")?$_GET['carrera']:1;
              $data[static::$nomArray] = MateriaModel::find($id,$id_carrera);
              $materias_up=$data[static::$nomArray]->fetch_assoc();
              $data['carreras']=CarreraModel::getAllActualizar($materias_up['id_carrera']);
              $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);;
              $data[static::$nomArray]=$materias_up;
              Session::validatePage(static::$view, $data);
          }
          else
          {
            Redirect::to(static::$link);
          }
    }
}
// ?>     