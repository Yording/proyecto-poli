<?php
class MateriaModel extends MasterModel
{

		static $table = 'materia';

    public static function insertar($data){            
        $query = "INSERT INTO ".static::$table." (nombre_materia,numero_creditos,ciclo,aula,descripcion,horas,cupos_disponibles) VALUES ('{$data['nombre']}', '{$data['creditos']}', '{$data['ciclo']}', '{$data['aula']}', '{$data['descripcion']}', '{$data['horas']}', '{$data['cupos']}')";
        static::query($query);
    }
    public static function eliminar($id)
    {
        $query = "DELETE FROM ".static::$table." WHERE id_materia='$id'";
        static::query($query);
    }
    public static function getAll($inicio,$fin)
	{   
		  // var_dump("SELECT m.*,cm.*,cd.*,c.nombre_carrera,p.nombre_completo FROM " . static::$table . " m FULL JOIN carrera_materia cm on (m.id_materia=cm.id_materia) FULL JOIN carrera_docente cd on (cm.id_carrera_docente=cd.id_carrera_docente) FULL JOIN carrera c on(c.id_carrera=cd.id_carrera) FULL JOIN docente d on (cd.id_documento=d.id_documento) FULL JOIN persona p on (d.id_documento=p.id_documento) ORDER BY m.id_materia LIMIT $inicio,$fin");
    //     exit;
		$query=("SELECT m.*,c.id_carrera,c.nombre_carrera,fd.nombre FROM materia m LEFT JOIN carrera_materia cm ON m.id_materia=cm.id_materia left join carrera_docente cd on cm.id_carrera_docente=cd.id_carrera_docente left join carrera c on cd.id_carrera=c.id_carrera left join (select concat(p.nombre_completo,' ',p.apellido_completo) nombre,d.id_documento from docente d inner join persona p on d.id_documento=p.id_documento) fd on cd.id_documento=fd.id_documento
				UNION 
				SELECT  m.*,c.id_carrera,c.nombre_carrera,fd.nombre FROM materia m RIGHT JOIN carrera_materia cm ON m.id_materia=cm.id_materia right join carrera_docente cd on cm.id_carrera_docente=cd.id_carrera_docente right join carrera c on cd.id_carrera=c.id_carrera inner join (select concat(p.nombre_completo,' ',p.apellido_completo) nombre,d.id_documento from docente d right join persona p on d.id_documento=p.id_documento) fd on cd.id_documento=fd.id_documento where m.id_materia!=null"); 
        return static::query($query);
	}
    public static function actualizar($data)
    {
        $query="UPDATE " . static::$table . " SET nombre_materia='{$data['nombre']}',numero_creditos='{$data['creditos']}',ciclo='{$data['ciclo']}',aula='{$data['aula']}',descripcion='{$data['descripcion']}',horas='{$data['horas']}',cupos_disponibles='{$data['cupos']}' WHERE id_materia='{$data['id_materia']}'"; 
        static::query($query);
    }
    public static function find($id,$id_carrera)
    {
        $query="SELECT m.*,c.* FROM " . static::$table . " m INNER JOIN carrera_materia cm on m.id_materia=cm.id_materia INNER JOIN carrera_docente cd ON
				cm.id_carrera_docente=cd.id_carrera_docente inner join carrera c on cd.id_carrera=c.id_carrera WHERE m.id_materia=$id and c.id_carrera=$id_carrera";
        return static::query($query);  
    }
	// public static function getall()
	// {
	// 	return mysql_query("select id_materia,nombre_materia from materia");
        
	// }
	// public static function getcode()
	// {
	// 	$result=mysql_query("select max((id_materia)+1) id from materia");
	// 	return mysql_fetch_assoc($result);
	// }
	// public static function getall_actualizar($id)
	// {
	// 	return mysql_query("select id_materia,nombre_materia from materia order by id_materia='$id' desc");
        
	// }
	// public static function delete($id)
	// {
	// 	mysql_query("DELETE FROM materia WHERE id_materia='$id'");
	// }
	// public static function find($id)
	// {
 //    	$result = mysql_query("select * from materia where id_materia=$id");
 //   		return mysql_fetch_assoc($result);   
 // 	}
 // 	public static function update($data)
 // 	{
	//     mysql_query("UPDATE materia SET nombre_materia='{$data['nombre']}',numero_creditos='{$data['creditos']}',ciclo='{$data['ciclo']}',aula='{$data['aula']}',descripcion='{$data['descripcion']}',horas='{$data['horas']}',cupos_disponibles='{$data['cupos']}' WHERE id_materia='{$data['id_materia']}'");
 //    }
 //    public static function count_materias()
	// {
	// 	return mysql_query("select count(*) numero from materia");
	// }


}
