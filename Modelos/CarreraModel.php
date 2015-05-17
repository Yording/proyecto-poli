<?php
class CarreraModel extends MasterModel
{

	    static $table = 'carrera';

	    public static function getAllActualizar($id)
	{
		$query="select id_carrera,nombre_carrera from ". static::$table." order by id_carrera='$id' desc";
		return static::query($query);
        
	}
	// public static function getcode()
	// {
	// 	$result=mysql_query("select max((id_carrera)+1) id from carrera");
	// 	return mysql_fetch_assoc($result);
	// }
	// public static function getall_actualizar($id)
	// {
	// 	return mysql_query("select id_carrera,nombre_carrera from carrera order by id_carrera='$id' desc");
        
	// }
	// public static function insertar($data)
	// {
 //         mysql_query("INSERT INTO  carrera (nombre_carrera,numero_creditos,valor_semestre,numero_semestres) VALUES ('{$data['nombre']}', '{$data['creditos']}', '{$data['valor_semestre']}', '{$data['numero_semestre']}')");
	// }
	// public static function getalltable($inicio,$fin)
	// {   
	// 	return mysql_query("select * from carrera order by id_carrera limit $inicio,$fin"); 
	// }
	// public static function delete($id)
	// {
	// 	mysql_query("DELETE FROM carrera WHERE id_carrera='$id'");
	// }
	// public static function find($id)
	// {
 //    	$result = mysql_query("select * from carrera where id_carrera=$id");
 //   		return mysql_fetch_assoc($result);   
 // 	}
 // 	public static function update($data)
 // 	{
	//     mysql_query("UPDATE carrera SET nombre_carrera='{$data['nombre']}',numero_creditos='{$data['creditos']}',valor_semestre='{$data['valor_semestre']}',numero_semestres='{$data['numero_semestre']}' WHERE id_carrera='{$data['id_carrera']}'");
 //    }
 //    public static function count_carreras()
	// {
	// 	return mysql_query("select count(*) numero from carrera");
	// }


}
