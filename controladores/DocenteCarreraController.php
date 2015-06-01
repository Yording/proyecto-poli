<?php
   class DocenteCarreraController extends MasterController {

     private static $modelo = 'DocenteCarreraModel';
     private static $nomArray="docentes_up";
     private static $link='index.php?controller=DocenteCarrera&action=registrar';
     private static $view='DocenteCarrera';
     private static $tableArray='docentesCarreras';
    public function getRegistrar() {
   
        $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);
         Session::validatePage(static::$view, $data);
    }

    public function postCreateOrUpdate($request) {
        $action=$request['crud'];
        $data=['id_documento' => $request['identificacion'],
        'nombre' => $request['nombre'],
        'apellido' => $request['apellido'],
        'fecha' =>$request['fecha_nacimiento'],
        'email' => $request['email'], 
        'telefono' =>$telefono=($request['ext']!="")? $request['telefono']." Ext ".$request['ext']:$request['telefono'],
        'categoria' =>$request['categoria'],
        'oficina' => $request['oficina'],
        'valor_horas' => $request['valor_horas'],
        'id_rol' =>'2'];
        PersonaModel::$action($data);
        DocenteModel::$action($data);
        Redirect::to(static::$link);
    }
    public function getEliminar() {
         if(isset($_GET['id']))
          {
              $id = $_GET['id'];
              DocenteModel::eliminar($id);
          }
          Redirect::to(static::$link);
    }
     public function getActualizar() {
          if(isset($_GET['id']))
           {
              $id = $_GET['id'];
              $data[static::$nomArray] = DocenteModel::find($id);
              $docentes_up=$data[static::$nomArray]->fetch_assoc();
              $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);;
              $data[static::$nomArray]=$docentes_up;
              Session::validatePage(static::$view, $data);
          }
          else
          {
            Redirect::to(static::$link);
          }
    }


}