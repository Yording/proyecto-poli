<?php
class DocenteModel extends MasterModel
{

	static $table = 'docente';

    public static function insertar($data){            
        $query = "INSERT INTO ".static::$table." (id_documento, telefono, categoria, oficina, valor_horas) VALUES ('{$data['id_documento']}', '{$data['telefono']}', '{$data['categoria']}', '{$data['oficina']}', '{$data['valor_horas']}')";
        static::query($query);
    }
    public static function eliminar($id)
    {
        $query = "DELETE d, p FROM persona p INNER JOIN ".static::$table." d on p.Id_documento=d.Id_documento WHERE d.id_documento='$id'";
        static::query($query);
    }
    public static function getAll($inicio,$fin)
	{   
		$query=("SELECT d.*,p.* FROM " . static::$table . " d INNER JOIN persona p on (d.id_documento=p.id_documento) ORDER BY p.id_documento limit $inicio,$fin"); 
        return static::query($query);
	}
    public static function actualizar($data)
    {
        $query="UPDATE " . static::$table . " d SET d.telefono='{$data['telefono']}',d.categoria='{$data['categoria']}',d.oficina='{$data['oficina']}',d.valor_horas='{$data['valor_horas']}' WHERE d.id_documento='{$data['id_documento']}'"; 
        static::query($query);
    }
    public static function find($id)
    {
        $query="SELECT p.*,d.*,r.* FROM " . static::$table . " d INNER JOIN persona p on (d.id_documento=p.id_documento) INNER JOIN rol r on(p.id_rol=r.id_rol) WHERE p.id_documento='$id'";
        return static::query($query);  
    }

}
