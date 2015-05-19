<?php

class UsuarioModel extends MasterModel {

    static $table = 'persona';
    
    public static function getAll($inicio,$fin)
	{   
		$query=("SELECT p.id_documento,p.nombre_completo,p.apellido_completo,r.rol,p.usuario,p.password FROM estudiante e INNER JOIN persona p on (e.id_documento=p.id_documento) inner join rol r on (r.id_rol=p.id_rol) UNION SELECT p.id_documento,p.nombre_completo,p.apellido_completo,r.rol,p.usuario,p.password FROM docente d INNER JOIN persona p on (d.id_documento=p.id_documento) inner join rol r on (r.id_rol=p.id_rol)  ORDER BY id_documento LIMIT $inicio,$fin"); 
        return static::query($query);
	}
	public static function actualizar($data)
    {
        $query="UPDATE ".static::$table." p SET p.usuario='{$data['usuario']}',p.password='{$data['password']}' where p.id_documento='{$data['id_documento']}'";
      	 static::query($query);
    }
}
