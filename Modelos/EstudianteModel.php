<?php
class EstudianteModel extends MasterModel
{

    static $table = 'estudiante';
    
    
    
    public static function insertar($data){            
        $query = "INSERT INTO " . static::$table . " (id_documento,id_carrera,apodo) VALUES ('{$data['id_documento']}', '{$data['carrera']}', '{$data['apodo']}')";
        
        static::query($query);
    }
    public static function eliminar($id)
    {
        $query = "DELETE e, p FROM persona p INNER JOIN " . static::$table . " e on p.Id_documento=e.Id_documento WHERE e.id_documento='$id'";
        static::query($query);
    }
    public static function getAll($inicio,$fin)
	{   
		$query=("SELECT e.*,p.*,c.* FROM " . static::$table ." e INNER JOIN persona p on (e.id_documento=p.id_documento) INNER JOIN carrera c on(e.id_carrera=c.id_carrera)  ORDER BY p.id_documento LIMIT $inicio,$fin"); 
        return static::query($query);
	}
    public static function actualizar($data)
    {
        $query="UPDATE  " . static::$table ." e SET e.id_carrera='{$data['carrera']}',e.apodo='{$data['apodo']}' where e.id_documento='{$data['id_documento']}'"; 
        static::query($query);
    }
    public static function find($id)
    {
        $query="SELECT p.*,e.apodo,p.email,p.fecha_nacimiento,c.nombre_carrera,c.id_carrera,r.* FROM " . static::$table ." e INNER JOIN persona p on (e.id_documento=p.id_documento) INNER JOIN carrera c on(e.id_carrera=c.id_carrera) INNER JOIN rol r on(p.id_rol=r.id_rol)  WHERE p.id_documento='$id'";
        return static::query($query);  
    }
		
}
