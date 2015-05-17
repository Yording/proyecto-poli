<?php
   class DocenteController extends MasterController {

     static $modelo = 'EstudianteModel';

    public function getRegistrar() {
   
        $data['docentes']=LibController::Zebra_Pagination('DocenteModel');
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

        Redirect::to('index.php?controller=Docente&action=registrar');
    }
    public function getEliminar() {
         if(isset($_GET['id']))
          {
              $id = $_GET['id'];
              DocenteModel::eliminar($id);
          }
          Redirect::to('index.php?controller=Docente&action=registrar');
    }
     public function getActualizar() {
          if(isset($_GET['id']))
           {
              $id = $_GET['id'];
              $data['docentes_up'] = DocenteModel::find($id);
              $docentes_up=$data['docentes_up']->fetch_assoc();
              $data['docentes']=LibController::Zebra_Pagination('DocenteModel');;
              $data['docentes_up']=$docentes_up;
              View::loadPage('Docente', $data);
          }
          else
          {
            Redirect::to('index.php?controller=Docente&action=registrar');
          }
    }


}