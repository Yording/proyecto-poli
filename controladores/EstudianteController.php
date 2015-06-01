<?php
   class EstudianteController extends MasterController {

     private static $modelo = 'EstudianteModel';
     private static $nomArray="estudiantes_up";
     private static $link='index.php?controller=Estudiante&action=registrar';
     private static $view='Estudiante';
     private static $tableArray='students';
    public function getRegistrar() {

        $data['carreras']=CarreraModel::all();
        $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);
         Session::validatePage(static::$view, $data);
    }

    public function postCreateOrUpdate($request) {
        $action=$request['crud'];
        $data=['id_documento' => $request['identificacion'],
        'nombre' => $request['nombre'],
        'apellido' => $request['apellidos'],
        'fecha' =>$request['fecha_nacimiento'],
        'email' => $request['email'], 
        'carrera' =>$request['carrera'],
        'apodo' => $request['apodo'],
        'id_rol' =>'3'];
        PersonaModel::$action($data);
        EstudianteModel::$action($data);

        Redirect::to(static::$link);
    }
    public function getEliminar() {
         if(isset($_GET['id']))
          {
              $id = $_GET['id'];
              EstudianteModel::eliminar($id);
          }
          Redirect::to(static::$link);
    }
     public function getActualizar() {
          if(isset($_GET['id']))
           {
              $id = $_GET['id'];
              $data[static::$nomArray] = EstudianteModel::find($id);
              $estudiantes_up=$data[static::$nomArray]->fetch_assoc();
              $data['carreras']=CarreraModel::getAllActualizar($estudiantes_up['id_carrera']);
              $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);;
              $data[static::$nomArray]=$estudiantes_up;
               Session::validatePage(static::$view, $data);
          }
          else
          {
            Redirect::to(static::$link);
          }
    }

}