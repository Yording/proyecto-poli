<?php

class UsuarioController extends MasterController {

    public function getRegistrar() {
        $data['users'] = UsuarioModel::all();
        View::load('usuario/registrar', $data);
    }

    public function postRegistrar($request) {
        $user = [
            'cedula' => $request['cedula'],
            'nombre' => $request['nombre'],
            'edad' => $request['edad']
        ];
        UsuarioModel::save($user);

        Redirect::to('index.php?controller=usuario&action=registrar');
    }

    public function getEliminar() {
        echo "Estoy eliminando";
    }

    public function getIndex() {
        echo "voy al index<br>";
    }

}
