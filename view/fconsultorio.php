<html>    
    <head>
        <title>Registro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="view/Css/estiloprincipal.css" rel="stylesheet" type="text/CSS">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <div class="container-fluid">
            <div class="brand_logo_container">
                <img src="https://cdn-icons-png.flaticon.com/512/3595/3595900.png" class="brand_logo" alt="Logo" style="width:60px;">
            </div>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#registroC">Consultorios</button>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 3</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#">Cerrar Sesion</button>
            </li>
            </ul>
        </div>
    </nav>
    <div id="registroC" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Formulario Consultorio</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="../controller/controladorconsultorio.php" method="POST">
                        <div class="form-group">
                            <label>N° Consultorio</label><br>
                            <input type="number" class="form-group" name="txtnumc">
                        </div>
                        <div class="form-group">
                            <label>Nombre Consultorio</label><br>
                            <input type="text" class="form-group" name="txtnomc">
                        </div>
                        <button name="registroConsul" class="btn btn-warning" type="submit">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="content" style="text-align: center;">
        <div class="justify-content-center">
            <div class="col-auto mt-5 mr-5 ml-5">
                <table class="table table-secondary table-hover">
                    <tr>
                        <th width="30%">Codigo Consultorio</th>
                        <th width="40%">Nombre Consultorio</th>
                        <th width="15%">Editar</th>
                        <th width="15%">Eliminar</th>
                    </tr>
                    <?php
                    require_once "../model/consultorio.php";
                        $obj=new consultorio();
                        $datos=$obj->listaconsultorios();
                        foreach($datos as $key){
                    ?>
                    <tr>
                        <td><?php echo $key["NumeroC"] ?></td>
                        <td><?php echo $key["NombreC"] ?></td>
                        <td><a href="#" class="btn btn-info">Editar</td>
                        <td><a href="#" class="btn btn-danger">Eliminar</td>
                    </tr>        
                    <?php 
                        }
                    ?>
                </table> 
            </div>
        </div>
    </div>
    </body>
</html>