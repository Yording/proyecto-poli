<div class="container-fluid">
                        <div class="row">
                            <br>
                            <div class="col-sm-10 col-sm-offset-1">
                                <form action="index.php?controller=Usuario&action=actualizar" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-4">
                                            <div class="input-group">
                                              <input type="text" class="form-control" id="id "name='id' placeholder="Documento Identidad" value='<?php if(isset($usuarios_up)){echo $usuarios_up['id_documento'];}?>'>
                                              <span class="input-group-btn">
                                                <a class="btn btn-default" type="button" href="index.php?controller=Usuario&action=actualizar&id="><span class="glyphicon glyphicon-search"></span></a>
                                              </span>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name='nombre' placeholder="Nombre" value='<?php if(isset($usuarios_up)){echo $usuarios_up['nombre_completo'];}?>' disabled>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" class="form-control" name='apellido' placeholder="Apellido" value='<?php if(isset($usuarios_up)){echo $usuarios_up['apellido_completo'];}?>' disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                           <input type="text" class="form-control" name='rol' placeholder="Rol" value='<?php if(isset($usuarios_up)){echo $usuarios_up['rol'];}?>' disabled>
                                        </div>
                                         <div class="col-sm-6">
                                            <div class="input-group">
                                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
                                              <input type="text" class="form-control" name='user' placeholder="Username" aria-describedby="sizing-addon2">
                                            </div>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                              <input type="text" class="form-control" name='pass' placeholder="Password">
                                              <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><span class="entypo-key"></span></button>
                                              </span>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                    </div>
                                    <div class="form-group botones-formulario">
                                        <div class="col-xs-12 col-sm-4 col-sm-offset-4 botones-formulario">
                                            <button class="btn btn-warning">Editar</button>
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
                                    <tr class="danger">
                                        <th>
                                            #ID
                                        </th>
                                        <th>
                                            Nombre
                                        </th>
                                        <th>
                                            Apellido
                                        </th>
                                         <th>
                                            Tipo Usuario
                                        </th>
                                        <th>
                                            Usuario
                                        </th>
                                        <th>
                                            Password
                                        </th>
                                        <th>
                                            <span class="glyphicon glyphicon-pencil"></span> 
                                        </th>
                                    </tr>
                                    <?php  while($usuario = mysqli_fetch_assoc($usuarios)){  ?>
                                    <tr>
                                        <td>
                                            <?php echo $usuario['id_documento'] ?>
                                        </td>
                                        <td>
                                           <?php echo $usuario['nombre_completo'] ?>
                                        </td>
                                        <td>
                                            <?php echo $usuario['apellido_completo'] ?>
                                          
                                        </td>
                                        <td>
                                            <?php echo $usuario['rol'] ?>
                                        </td>
                                        <td>
                                            <?php echo $usuario['usuario'] ?>
                                        </td>
                                        <td>
                                            <?php echo $usuario['password'] ?>
                                        </td>
                                        <td>
                                            <center><a class="btn btn-success btn-editar" href="index.php?controller=Usuario&action=Actualizar&id=<?php echo $usuario['id_documento'] ?>&rol=<?php echo $usuario['rol'] ?>"><span class="glyphicon glyphicon-ok"></span> </a></center>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </table>
                                <hr class="separator">
                                <?php  lib::pagination_render('UsuarioModel')->render(); ?>
                            </div>
                        </div>
                       <!-- Cierra Container-Fluid  -->
                    </div>
                    <!-- Cierra Fluid-padre -->