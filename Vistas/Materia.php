<div class="container-fluid">
    <div class="row">
        <br>
        <div class="col-sm-10 col-sm-offset-1">
            <form action="index.php?controller=Materia&action=CreateOrUpdate" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                    <input type="text" class="form-control" name="id" placeholder="<?php if(isset($id_materia["id"])){echo $id_materia["id"];} ?>" readonly="" value='<?php  if(isset($materias_up)){echo $materias_up['id_materia'];}?>'>
                                        </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Materia" value='<?php  if(isset($materias_up)){echo $materias_up['nombre_materia'];}?>'>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="number"  name="creditos" class="form-control" placeholder="Número de Créditos" value='<?php  if(isset($materias_up)){echo $materias_up['numero_creditos'];}?>'>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-6">
                        <input type="number" name="horas" class="form-control" placeholder="Cantidad de Horas" value='<?php  if(isset($materias_up)){echo $materias_up['horas'];}?>'>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="number" name="cupos" class="form-control" placeholder="Cupos Disponibles" value='<?php  if(isset($materias_up)){echo $materias_up['cupos_disponibles'];}?>'>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" name="ciclo" class="form-control" placeholder="Ciclo" value='<?php  if(isset($materias_up)){echo $materias_up['ciclo'];}?>'>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" name="aula" class="form-control" placeholder="Aula" value='<?php  if(isset($materias_up)){echo $materias_up['aula'];}?>'>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-6">
                          <select class="combobox" name="carrera">
                           <?PHP while ($carrera=  mysqli_fetch_assoc($carreras)){?>
                            <option value="<?php echo $carrera['id_carrera'];?>"><?php  echo $carrera['nombre_carrera'];?></option>        
                            <?php }?>
                          </select>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                          <select class="combobox" name="docente">
                           <?PHP while ($carrera=  mysqli_fetch_assoc($carreras)){?>
                            <option value="<?php echo $carrera['id_carrera'];?>"><?php  echo $carrera['nombre_carrera'];?></option>        
                            <?php }?>
                          </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-12">
                        <textarea   name="descripcion"  class="form-control" placeholder="Descripción" value='<?php  if(isset($materias_up)){echo $materias_up['descripcion'];}?>'></textarea>
                    </div>
                </div>
                <div class="form-group botones-formulario">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-3">
                        <button class="btn btn-success" value="insertar"  name="crud" >Registrar</button>
                    </div>
                    <div class="col-xs-12 col-sm-3 botones-formulario">
                       <button name="crud" class="btn btn-warning" value="actualizar">Editar</button>
                    </div>                    
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <tr class="danger">
                    <th>
                        #ID
                    </th>
                    <th>
                        Materia
                    </th>
                    <th>
                        Créditos
                    </th>
                    <th>
                        Ciclo
                    </th>
                    <th>
                        Aula
                    </th>
                    <th>
                        Horas
                    </th>
                    <th>
                        Cupos
                    </th>
                     <th>
                        Carrera
                    </th>
                     <th>
                        Docente
                    </th>
                    <th>
                        <span class="glyphicon glyphicon-trash"></span>
                    </th> 
                    <th>
                        <span class="glyphicon glyphicon-pencil"></span> 
                    </th>
                </tr>
                <?php while ($materia = mysqli_fetch_assoc($materias)) { ?>

                    <tr>
                        <td>
                            <?php// var_dump($materia); exit; ?>
                            <?php echo $materia['id_materia'] ?>
                        </td>
                        <td>
                            <?php echo $materia['nombre_materia'] ?>
                        </td>
                        <td>
                            <?php echo $materia['numero_creditos'] ?>
                        </td>
                        <td>
                            <?php echo $materia['ciclo'] ?>
                        </td>
                        <td>
                            <?php echo $materia['aula'] ?>
                        </td>
                        <td>
                            <?php echo $materia['horas'] ?>
                        </td>
                        <td>
                            <?php echo $materia['cupos_disponibles'] ?>
                        </td>
                         <td>
                            <?php echo $materia['nombre_carrera'] ?>
                        </td>
                         <td>
                            <?php echo $materia['nombre'] ?>
                        </td>
                        <td>
                          <center><a class="btn btn-danger btn-delete" href="index.php?controller=Materia&action=Eliminar&id=<?php echo $materia['id_materia'] ?>"><span class="glyphicon glyphicon-remove"></span></a> </center>
                        </td>
                        <td>
                          <center><a class="btn btn-success btn-editar" href="index.php?controller=Materia&action=Actualizar&id=<?php echo $materia['id_materia'] ?>&carrera=<?php echo $materia['id_carrera'] ?>"><span class="glyphicon glyphicon-ok"></span> </a></center>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <hr class="separator">
           <?php  lib::pagination_render('MateriaModel')->render(); ?>
        </div>
    </div>
    <!-- Cierra Container-Fluid  -->
</div>
<!-- Cierra Fluid-padre -->
