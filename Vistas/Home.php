
<!DOCTYPE html>
<html>

    <head>
        <title>Universidad Calasanz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/CSS/Styles.css">
    </head>
    <body>
       <div class="container-fluid">
           <div class="row">
                <div class="col-xs-12 col-sm-2 contenedor-lateral">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="nombre-perfil"> <span><?php echo $_SESSION['profile']?></span></div>
                            <center><img src="public/CSS/Images/user-icon1.png" class="img-responsive img-thumbnail foto-perfil"></center>
                            <div class="btn-group btn-group-justified btn-menu-perfil">
                                <a href="#" class="btn btn-default active"><span class="glyphicon glyphicon-home"></span></a>
                                <a href="#" class="btn btn-default"><span class="entypo-cog"></span></a>
                                <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-bell"></span></a>
                                <a href="Homes.php?action=cerrar_sesion" class="btn btn-default"><span class="glyphicon glyphicon-off"></span></a>
                            </div>
                        </div>     
                    </div>
                    <hr>
                    <div class="row">
                        <nav>
                            <div class="btn-group-vertical menu-principal col-sm-12">
                                <a class="btn btn-primary" href="Materias.php">Materias</a>
                                <a class="btn btn-primary" href="Ver Notas.html">Ver Notas</a>
                                <a class="btn btn-primary" href="">Calificar Docente</a>
                                 <a class="btn btn-primary" href="carreras.php">Carreras</a>
                                 <a class="btn btn-primary" href="Usuarios.php">Usuarios Sistema</a>
                                 <a class="btn btn-primary" href="Docentes.php">Docentes</a>
                                <a class="btn btn-primary" href="Estudiantes.php">Estudiantes</a>
                                 <a class="btn btn-primary" href="Notas.html">Notas</a>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- BODY -->
               <div class="col-sm-10 col-sm-offset-2">
                    <div class="row">
                        <div class="container-fluid">
                          <header class="col-sm-12" id="banner">
                            <center><H1>UNIVERSIDAD CALASANZ</H1></center>
                          </header>
                        </div> 
                        <div class="container-fluid main-slider">
                            <div class="col-sm-12">
                                <div class="slide">
                                    <img class="" src="http://lorempixel.com/1100/550/business/" alt="">
                                    <img class="" src="http://lorempixel.com/1100/550/animals/" alt="">
                                    <img class=""src="http://lorempixel.com/1100/550/city/" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
       </div>
       <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="public/JS/main.js"></script>
        <script src="public/JS/jquery.slides.js"></script>
    </body>
</html>
