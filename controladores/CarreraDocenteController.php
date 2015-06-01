<?php

   class CarreraDocenteController extends MasterController {

     private static $modelo = 'CarreraDocenteModel';
     private static $nomArray="carrerasDocentes_up";
     private static $link='index.php?controller=CarreraDocente&action=registrar';
     private static $view='CarreraDocente';
     private static $tableArray='carrerasDocentes';

    public function getRegistrar() {
        $data['carreras']=CarreraModel::all();
        $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);
         Session::validatePage(static::$view, $data);
    }

    public function postCreateOrUpdate($request) {
        session_start();
        $action=$request['crud'];
        $data=['carrera'=>$request['carrera'],
        'id_documento' => $request['id'],
        'id_carrera'=>$request['id_carrera']];
        CarreraDocenteModel::$action($data);
         unset($_SESSION['cedula']);
        Redirect::to(static::$link);
    }
    public function getEliminar() {
         if(isset($_GET['id']))
          {
              $id = $_GET['id'];
              CarreraDocenteModel::eliminar($id);
              Session::addVar('action','delete');
          }
          Redirect::to(static::$link);
    }
     public function getActualizar() {
          if(isset($_GET['id']))
           {
              $id = $_GET['id'];
              $id_carrera=$_GET['idcarrera'];
              $data[static::$nomArray] = CarreraDocenteModel::find($id,$id_carrera);
              $carrerasDocentes_up=$data[static::$nomArray]->fetch_assoc();
              $data['carreras']=CarreraModel::getAllActualizar($carrerasDocentes_up['id_carrera']);
              $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);;
              $data[static::$nomArray]=$carrerasDocentes_up;
              Session::validatePage(static::$view, $data);
          }
          else
          {
            Redirect::to(static::$link);
          }
    }
}
// ?>     