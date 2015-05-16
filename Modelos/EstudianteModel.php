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
    public static function getall($inicio,$fin)
	{   
		$query=("SELECT e.*,p.*,c.* from " . static::$table ." e inner join persona p on (e.id_documento=p.id_documento) inner join carrera c on(e.id_carrera=c.id_carrera)  order by p.id_documento limit $inicio,$fin"); 
        return static::query($query);
	}
    public static function actualizar($data)
    {
        $query="UPDATE  " . static::$table ." e SET e.id_carrera='{$data['carrera']}',e.apodo='{$data['apodo']}' where e.id_documento='{$data['id_documento']}'"; 
        static::query($query);
    }
    public static function find($id)
    {
        $query="select p.id_documento,p.nombre_completo,p.apellido_completo,e.apodo,p.email,p.fecha_nacimiento,c.nombre_carrera,c.id_carrera from " . static::$table ." e inner join persona p on (e.id_documento=p.id_documento) inner join carrera c on(e.id_carrera=c.id_carrera) where p.id_documento='$id'";
        return static::query($query);  
    }
		
}
