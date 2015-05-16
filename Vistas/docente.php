                    <div class="container-fluid">
                        <div class="row">
                            <br>
                            <div class="col-sm-10 col-sm-offset-1">
                                <form action="Docentes.php" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-2 col-sm-offset-5">
                                            <center><h4>Foto Perfil</h4></center>
                                             <a href="#" class="thumbnail" id="btn-foto-perfil">
                                              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjYwLjUiIHk9IjkwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTcxeDE4MDwvdGV4dD48L2c+PC9zdmc+" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="id" placeholder="Documento Identidad" value='<?php  if(isset($docentes_up)){echo $docentes_up['id_documento'];}?>' >
                                        </div>
                                         <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="nombre" placeholder="Nombres Completos" value='<?php  if(isset($docentes_up)){echo $docentes_up['nombre_completo'];}?>'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="apellido" placeholder="Apellidos Completos" value='<?php  if(isset($docentes_up)){echo $docentes_up['apellido_completo'];}?>'>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="fecha" placeholder="Fecha Nacimiento" value='<?php  if(isset($docentes_up)){echo $docentes_up['fecha_nacimiento'];}?>'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="Email" class="form-control" name="email" placeholder="Email" required value='<?php  if(isset($docentes_up)){echo $docentes_up['email'];}?>'>
                                        </div>
                                         <div class="col-xs-12 col-sm-6">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="telefono" placeholder="Telefono" value='<?php  if(isset($docentes_up) && isset( explode(" ",$docentes_up['telefono'])[0])){echo explode(" ",$docentes_up['telefono'])[0];}?>'>
                                                <span class="input-group-addon">
                                                  Ext.
                                                </span>
                                                <input type="number" name="ext" class="form-control" value='<?php   if(isset($docentes_up) && isset( explode(" ",$docentes_up['telefono'])[2])){echo explode(" ",$docentes_up['telefono'])[2];}?>'>
                                            </div>
                                           
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                          <select name="categoria" class="combobox">
                                            <option value="Tiempo Completo">Tiempo Completo</option>
                                            <option value="Medio Tiempo">Medio Tiempo</option>
                                          </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="oficina" placeholder="Oficina" value='<?php  if(isset($docentes_up)){echo $docentes_up['oficina'];}?>'>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="number" class="form-control" name="valor_horas" placeholder="Valor Horas" value='<?php  if(isset($docentes_up)){echo $docentes_up['valor_horas'];}?>'>
                                        </div>
                                    </div>
                                    <div class="form-group botones-formulario">
                                        <div class="col-xs-12 col-sm-3 col-sm-offset-3">
                                            <button class="btn btn-success" name="crud" value="Docentes.php?action=registrar">Registrar</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 botones-formulario">
                                            <button class="btn btn-warning" name="crud" value="Docentes.php?action=update">Editar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr class="danger tabla-docente">
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
                                            Email
                                        </th>
                                        <th>
                                            Fecha Nacimiento
                                        </th>
                                        <th>
                                            Telefono
                                        </th>
                                        <th>
                                            Categoria
                                        </th>
                                        <th>
                                            Oficina
                                        </th>
                                        <th>
                                            Valor Horas
                                        </th>
                                        <th>
                                        <span class="glyphicon glyphicon-trash"></span>
                                        </th> 
                                        <th>
                                            <span class="glyphicon glyphicon-pencil"></span> 
                                        </th>
                                    </tr>
                                    <?php  while($docentes = mysql_fetch_assoc($lista_docentes)){  ?>
                                    <tr>
                                        <td>
                                            <?php ?>
                                            <?php echo $docentes['id_documento'] ?>
                                        </td>
                                        <td>
                                           <?php echo $docentes['nombre_completo'] ?>
                                        </td>
                                        <td>
                                            <?php echo $docentes['apellido_completo'] ?>
                                          
                                        </td>
                                        <td>
                                            <?php echo $docentes['email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $docentes['fecha_nacimiento'] ?>
                                        </td>
                                        <td>
                                           <?php echo $docentes['telefono'] ?>
                                        </td>
                                        <td>
                                           <?php echo $docentes['categoria'] ?>
                                        </td>
                                        <td>
                                           <?php echo $docentes['oficina'] ?>
                                        </td>
                                        <td>
                                           <?php echo $docentes['valor_horas'] ?>
                                        </td>
                                        <td>
                                           <center><a class="btn btn-danger btn-delete" href="Docentes.php?action=delete&id=<?php echo $docentes['id_documento'] ?>"><span class="glyphicon glyphicon-remove"></span></a> </center>
                                        </td>
                                        <td>
                                            <center><a class="btn btn-success btn-editar" href="Docentes.php?action=update&id=<?php echo $docentes['id_documento'] ?>"><span class="glyphicon glyphicon-ok"></span> </a></center>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </table>
                                <hr class="separator">
                                <?php $pagination-> render(); ?>
                            </div>
                        </div>
                       <!-- Cierra Container-Fluid  -->
                    </div>
                    <!-- Cierra Fluid-padre -->

     

                   