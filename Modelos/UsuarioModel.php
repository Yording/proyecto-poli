<?php

class UsuarioModel extends MasterModel {

    static $table = 'usuario';
    
    
    
    public static function save($data){            
        $query = "INSERT INTO " . static::$table . " (cedula, nombre, edad) VALUES('{$data['cedula']}','{$data['nombre']}',{$data['edad']});";
        
        static::query($query);
    }

}
