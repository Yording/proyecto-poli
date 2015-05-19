<?php
   class DocenteController extends MasterController {

     private static $modelo = 'DocenteModel';
     private static $nomArray="docentes_up";
     private static $link='index.php?controller=Docente&action=registrar';

    public function getRegistrar() {
   
        $data['docentes']=LibController::Zebra_Pagination(static::$modelo);
         Session::validatePage('Docente', $data);
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
              $data['docentes']=LibController::Zebra_Pagination(static::$modelo);;
              $data[static::$nomArray]=$docentes_up;
              Session::validatePage('Docente', $data);
          }
          else
          {
            Redirect::to(static::$link);
          }
    }


}