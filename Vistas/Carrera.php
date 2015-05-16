                    <div class="container-fluid">
                        <div class="row">
                            <br>
                            <div class="col-sm-10 col-sm-offset-1">
                                <form action="Carreras.php" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-4">
                                            <input type="text" class="form-control" name="id" placeholder="<?php if(isset($id_carrera["id"])){echo $id_carrera["id"];} ?>" readonly="" value='<?php  if(isset($carreras_up)){echo $carreras_up['id_carrera'];}?>'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre Carrera" value='<?php  if(isset($carreras_up)){echo $carreras_up['nombre_carrera'];}?>'>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="number" name="creditos" class="form-control" placeholder="Número de Créditos" value='<?php  if(isset($carreras_up)){echo $carreras_up['numero_creditos'];}?>'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-6">
                                                <input type="number" name="valor_semestre" class="form-control" placeholder="Valor Semestre" value='<?php  if(isset($carreras_up)){echo $carreras_up['valor_semestre'];}?>'>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="number" name="numero_semestre" class="form-control" placeholder="Número Semestre" value='<?php  if(isset($carreras_up)){echo $carreras_up['numero_semestres'];}?>'>
                                        </div>
                                    </div>
                                    <div class="form-group botones-formulario">
                                        <div class="col-xs-12 col-sm-3 col-sm-offset-3">
                                            <button name="crud" class="btn btn-success" value="Carreras.php?action=registrar">Registrar</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <button name="crud" class="btn btn-warning" value="Carreras.php?action=update">Editar</button>
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
                                            Carrera
                                        </th>
                                        <th>
                                            # de Créditos
                                        </th>
                                         <th>
                                            Valor Semestre
                                        </th>
                                        <th>
                                            Número de semestre
                                        </th>
                                        <th>
                                        <span class="glyphicon glyphicon-trash"></span>
                                        </th> 
                                        <th>
                                            <span class="glyphicon glyphicon-pencil"></span> 
                                        </th>
                                    </tr>
                                    <?php  while($carreras = mysql_fetch_assoc($lista_carreras)){  ?>
                                    <tr>
                                        <td>
                                            <?php ?>
                                            <?php echo $carreras['id_carrera'] ?>
                                        </td>
                                        <td>
                                           <?php echo $carreras['nombre_carrera'] ?>
                                        </td>
                                        <td>
                                            <?php echo $carreras['numero_creditos'] ?>
                                          
                                        </td>
                                        <td>
                                            <?php echo $carreras['valor_semestre'] ?>
                                        </td>
                                        <td>
                                            <?php echo $carreras['numero_semestres'] ?>
                                        </td>
                                        <td>
                                           <center><a class="btn btn-danger btn-delete" href="Carreras.php?action=delete&id=<?php echo $carreras['id_carrera'] ?>"><span class="glyphicon glyphicon-remove"></span></a> </center>
                                        </td>
                                        <td>
                                            <center><a class="btn btn-success btn-editar" href="Carreras.php?action=update&id=<?php echo $carreras['id_carrera'] ?>"><span class="glyphicon glyphicon-ok"></span> </a></center>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </table>
                                <hr class="separator">
                                <?php $pagination-> render();?>
                            </div>
                        </div>
                       <!-- Cierra Container-Fluid  -->
                    </div>
                    <!-- Cierra Fluid-padre -->