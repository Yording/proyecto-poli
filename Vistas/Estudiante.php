
                      <div class="container-fluid">
                        <div class="row">
                            <br>
                            <div class="col-sm-10 col-sm-offset-1">
                                <form action="index.php?controller=Estudiante&action=CreateOrUpdate" class="form-horizontal" method="post" id="crud_student">
                                    <div class="form-group">

                                        <div class="col-xs-12 col-sm-2 col-sm-offset-5">
                                            <center><h4>Foto Perfil</h4></center>
                                             <a href="#" class="thumbnail" id="btn-foto-perfil">
                                              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjYwLjUiIHk9IjkwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTcxeDE4MDwvdGV4dD48L2c+PC9zdmc+" alt="...">
                                              <!-- <span class="btn btn-success fileinput-button">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        <input class="thumbnail" type="file" name="files[]" id="btn-buscar-foto" multiple>
                                                </span> -->
                                            </a>
                                            <!-- <p class="foto-registro">
                                                   <span class="btn btn-success fileinput-button">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        The file input field used as target for the file upload widget
                                                        <input class="thumbnail" type="file" name="files[]" multiple>
                                                    </span>
                                            </p> -->
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="identificacion" placeholder="Documento Identidad" value='<?php if(isset($estudiantes_up)){echo $estudiantes_up['id_documento'];}?>' >
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="nombre" placeholder="Nombres Completos" value='<?php  if(isset($estudiantes_up)){echo $estudiantes_up['nombre_completo'];}?>'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos Completos" value='<?php  if(isset($estudiantes_up)){echo $estudiantes_up['apellido_completo'];}?>'>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                           <div class="input-group">
                                                <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Fecha Nacimiento" value='<?php  if(isset($estudiantes_up)){echo $estudiantes_up['fecha_nacimiento'];}?>'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="Email" class="form-control" name="email" placeholder="Email" value='<?php  if(isset($estudiantes_up)){echo $estudiantes_up['email'];}?>'>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                          <select class="combobox" name="carrera">
                                           <?PHP while ($carrera=  mysqli_fetch_assoc($carreras)){?>
                                            <option value="<?php echo $carrera['id_carrera'];?>"><?php  echo $carrera['nombre_carrera'];?></option>        
                                            <?php }?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="apodo" placeholder="Apodo" value='<?php  if(isset($estudiantes_up)){echo $estudiantes_up['apodo'];}?>'>
                                        </div>
                                    </div>
                                    <hr class="separator">
                                    <div class="form-group botones-formulario">
                                        <div class="col-xs-12 col-sm-3 col-sm-offset-3">
                                            <button type="submit" name ="crud"class="btn btn-success" value="insertar">Registrar</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 botones-formulario">
                                            <button type="submit" name="crud" class="btn btn-warning" value="actualizar">Editar</button>
                                        </div>
                                    </div>
                                </form>
                                <center><button class="btn btn-default" id="esconder"><span class="glyphicon glyphicon-menu-up"></span></button></center>
                                <hr class="separator">
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr class="danger">
                                        <th>
                                            Id
                                        </th>
                                        <th>
                                            Nombre
                                        </th>
                                        <th>
                                            Apellido
                                        </th>
                                         <th>
                                            Apodo
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Fecha Nacimiento
                                        </th>
                                        <th>
                                            Carrera
                                        </th>
                                        <th>
                                        <span class="glyphicon glyphicon-trash"></span>
                                        </th> 
                                        <th>
                                            <span class="glyphicon glyphicon-pencil"></span> 
                                        </th>
                                    </tr>
                                    <?php  while($estudiante = mysqli_fetch_assoc($students)){  ?>
                                    <tr>
                                        <td>
                                            <?php echo $estudiante['id_documento'] ?>
                                        </td>
                                        <td>
                                           <?php echo $estudiante['nombre_completo'] ?>
                                        </td>
                                        <td>
                                            <?php echo $estudiante['apellido_completo'] ?>
                                          
                                        </td>
                                        <td>
                                            <?php echo $estudiante['apodo'] ?>
                                        </td>
                                        <td>
                                            <?php echo $estudiante['email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $estudiante['fecha_nacimiento'] ?>
                                        </td>
                                        <td>
                                           <?php echo $estudiante['nombre_carrera'] ?>
                                        </td>
                                        <td>
                                           <center><a class="btn btn-danger btn-delete" href="index.php?controller=Estudiante&action=Eliminar&id=<?php echo $estudiante['id_documento'] ?>"><span class="glyphicon glyphicon-remove"></span></a> </center>
                                        </td>
                                        <td>
                                            <center><a class="btn btn-success btn-editar" href="index.php?controller=Estudiante&action=Actualizar&id=<?php echo $estudiante['id_documento'] ?>"><span class="glyphicon glyphicon-ok"></span> </a></center>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </table>
                                <hr class="separator">
                                <?php  lib::pagination_render('EstudianteModel')->render(); ?>
                            </div>
                        </div>
                       <!-- Cierra Container-Fluid  -->
                    </div>
                    <!-- Cierra Fluid-padre -->

     
