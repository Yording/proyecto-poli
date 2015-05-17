<?php
class SesionModel extends MasterModel
{
	  static $table = 'persona';
	public static function ingresar($data)
	{
    	$query="select * from ".static::$table." where usuario='{$data['usuario']}' and password='{$data['pass']}' and id_rol='{$data['rol']}'";
    	return static::query($query); 
 	}
}
