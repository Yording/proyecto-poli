<?php
class CarreraDocenteModel extends MasterModel
{

	static $table = 'carrera_docente';

    public static function insertar($data){ 
        $query = "INSERT INTO ".static::$table." (id_documento, id_carrera) VALUES ('{$data['id_documento']}', '{$data['carrera']}')"; 
        static::query($query);
    }
    public static function eliminar($id)
    {
        $query = "DELETE cd FROM ".static::$table." cd WHERE cd.id_carrera_docente='$id'";
        static::query($query);
    }
    public static function getAll($inicio,$fin)
	{   
		$query = "SELECT d.*,p.*,c.* FROM docente d INNER JOIN persona p ON (d.id_documento=p.id_documento) INNER JOIN " . static::$table ." cd ON (cd.id_documento=d.id_documento) INNER JOIN carrera c ON (c.id_carrera=cd.id_carrera) ORDER BY p.id_documento limit $inicio,$fin";
        return static::query($query);
	}
    public static function actualizar($data)
    {
        $query="UPDATE " . static::$table . " SET id_carrera='{$data['carrera']}' WHERE id_documento='{$data['id_documento']}' and id_carrera='{$data['id_carrera']}'"; 
        static::query($query);
    }
    public static function find($id,$id_carrera)
    {
        $query="SELECT p.*,d.*,r.*,c.* FROM docente d INNER JOIN persona p ON (d.id_documento=p.id_documento) INNER JOIN rol r ON(p.id_rol=r.id_rol) inner join carrera_docente cd ON cd.id_documento=d.id_documento INNER JOIN carrera c ON cd.id_carrera=c.id_carrera WHERE p.id_documento='$id' and c.id_carrera='$id_carrera'";
        return static::query($query);  
    }

}
