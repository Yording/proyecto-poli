<?php

   class CarreraController extends MasterController {

     private static $modelo = 'CarreraModel';
     private static $nomArray="carreras_up";
     private static $link='index.php?controller=Carrera&action=registrar';

    public function getRegistrar() {
      
        $data['carreras']=LibController::Zebra_Pagination(static::$modelo);
         Session::validatePage('Carrera', $data);
    }

    public function postCreateOrUpdate($request) {
        $action=$request['crud'];
        $data=['id_carrera'=>$request['id'],
        'nombre' => $request['nombre'],
        'creditos' => $request['creditos'],
        'valor_semestre' =>$request['valor_semestre'],
        'numero_semestre' => $request['numero_semestre']];
        CarreraModel::$action($data);

        Redirect::to(static::$link);
    }
    public function getEliminar() {
         if(isset($_GET['id']))
          {
              $id = $_GET['id'];
              CarreraModel::eliminar($id);
          }
          Redirect::to(static::$link);
    }
     public function getActualizar() {
          if(isset($_GET['id']))
           {
              $id = $_GET['id'];
              $data[static::$nomArray] = CarreraModel::find($id);
              $carreras_up=$data[static::$nomArray]->fetch_assoc();
              $data["carreras"]=LibController::Zebra_Pagination(static::$modelo);;
              $data[static::$nomArray]=$carreras_up;
              Session::validatePage('Carrera', $data);
          }
          else
          {
            Redirect::to(static::$link);
          }
    }
}
// ?>     