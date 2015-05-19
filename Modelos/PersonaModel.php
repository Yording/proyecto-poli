<?php
class PersonaModel extends MasterModel
{
	static $table = 'persona';

	public static function insertar($data)
	{
		 $query = "INSERT INTO " . static::$table . " (id_documento,id_rol,nombre_completo,apellido_completo,fecha_nacimiento,email,usuario,password) VALUES ('{$data['id_documento']}', '{$data['id_rol']}', '{$data['nombre']}', '{$data['apellido']}', '{$data['fecha']}', '{$data['email']}', 'null', 'null')";
		  static::query($query);
	}
	public static function getallestudiantes()
	{
		return mysql_query("select * from persona where id_rol=3 order by id_documento");
	}
	public static function actualizar($data)
    {
        $query="UPDATE ".static::$table." p SET p.nombre_completo='{$data['nombre']}',p.apellido_completo='{$data['apellido']}',p.fecha_nacimiento='{$data['fecha']}',p.email='{$data['email']}' where p.id_documento='{$data['id_documento']}'";
      	 static::query($query);
    }
    

}
