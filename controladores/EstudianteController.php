<?php
   class EstudianteController extends MasterController {

     static $modelo = 'EstudianteModel';

    public function getRegistrar() {

        $data['carreras']=CarreraModel::all();
       
        $data['students']=LibController::Zebra_Pagination('EstudianteModel');
         Session::validatePage('Estudiante', $data);
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

        Redirect::to('index.php?controller=Estudiante&action=registrar');
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
              $data['carreras']=CarreraModel::getAllActualizar($estudiantes_up['id_carrera']);
              $data['students']=LibController::Zebra_Pagination('EstudianteModel');;
              $data['estudiantes_up']=$estudiantes_up;
              View::loadPage('Estudiante', $data);
          }
          else
          {
            Redirect::to('index.php?controller=Estudiante&action=registrar');
          }
    }

    public function getIndex() {
        echo "voy al index<br>";
    }

}