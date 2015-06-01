                    <div class="container-fluid">
                        <div class="row">
                            <br>
                            <div class="col-sm-10 col-sm-offset-1">
                                <form action="index.php?controller=CarreraDocente&action=CreateOrUpdate" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-4">
                                            <div class="input-group">
                                              <input type="text" class="form-control" id="id "name='id' placeholder="Documento Identidad" value='<?php if(isset($carrerasDocentes_up)){echo $carrerasDocentes_up['id_documento'];}?>'>
                                              <span class="input-group-btn">
                                                <a class="btn btn-default" type="button" href="index.php?controller=Usuario&action=actualizar&id="><span class="glyphicon glyphicon-search"></span></a>
                                              </span>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                    </div>
                                    <div class="form-group">
                                         <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="nombre" placeholder="Nombres Completos" value='<?php  if(isset($carrerasDocentes_up)){echo $carrerasDocentes_up['nombre_completo'];}?>' disabled>
                                        </div>
                                         <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name="apellido" placeholder="Apellidos Completos" value='<?php  if(isset($carrerasDocentes_up)){echo $carrerasDocentes_up['apellido_completo'];}?>' disabled>
                                            <input name="id_carrera" type="text" hidden value='<?php  if(isset($carrerasDocentes_up)){echo $carrerasDocentes_up['id_carrera'];}?>'>
                                        </div>
                                    </div>
                                    <?PHP //var_dump($carreras); exit;?>
                                    <div class="form-group">
                                         <div class="col-xs-12 col-sm-6">
                                              <select class="combobox" name="carrera">
                                               <?PHP while ($carrera=  mysqli_fetch_assoc($carreras)){?>
                                                <option value="<?php echo $carrera['id_carrera'];?>"><?php  echo $carrera['nombre_carrera'];?></option>        
                                                <?php }?>
                                              </select>
                                         </div>
                                    </div>
                                    <div class="form-group botones-formulario">
                                        <div class="col-xs-12 col-sm-3 col-sm-offset-3">
                                            <button class="btn btn-success" name="crud" value="insertar">Registrar</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 botones-formulario">
                                            <button class="btn btn-warning" name="crud" value="actualizar">Editar</button>
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
                                            Carrera
                                        </th>
                                        <th>
                                        <span class="glyphicon glyphicon-trash"></span>
                                        </th> 
                                        <th>
                                            <span class="glyphicon glyphicon-pencil"></span> 
                                        </th>
                                    </tr>
                                    <?php  while($carreraDocente = mysqli_fetch_assoc($carrerasDocentes)){  ?>
                                    <tr>
                                        <td>
                                            <?php echo $carreraDocente['id_documento'] ?>
                                        </td>
                                        <td>
                                           <?php echo $carreraDocente['nombre_completo'] ?>
                                        </td>
                                        <td>
                                            <?php echo $carreraDocente['apellido_completo'] ?>
                                          
                                        </td>
                                         <td>
                                            <?php echo $carreraDocente['nombre_carrera'] ?>
                                          
                                        </td>
                                        <td>
                                           <center><a class="btn btn-danger btn-delete" href="index.php?controller=CarreraDocente&action=Eliminar&id=<?php echo $carreraDocente['id_documento'] ?>"><span class="glyphicon glyphicon-remove"></span></a> </center>
                                        </td>
                                        <td>
                                            <center><a class="btn btn-success btn-editar" href="index.php?controller=CarreraDocente&action=Actualizar&id=<?php echo $carreraDocente['id_documento'] ?>&idcarrera=<?php echo $carreraDocente['id_carrera'] ?>"><span class="glyphicon glyphicon-ok"></span> </a></center>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </table>
                                <hr class="separator">
                                  <?php  lib::pagination_render('DocenteModel')->render(); ?>
                            </div>
                        </div>
                       <!-- Cierra Container-Fluid  -->
                    </div>
                    <!-- Cierra Fluid-padre -->

     

                   