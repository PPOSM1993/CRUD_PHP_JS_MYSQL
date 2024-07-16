<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP Fetch y MySQL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <br>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" id="frm">
                            <div class="form-group">
                                <label for="">Codigo</label>
                                <input type="hidden" name="idp" id="idp" value="">
                                <input type="text" class="form-control form-control-sm" name="codigo" id="codigo"
                                    placeholder="Ingrese Codigo">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Producto</label>
                                <input type="text" class="form-control form-control-sm" name="producto" id="producto"
                                    placeholder="Ingrese Producto">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Descripcion</label>
                                <textarea name="" id="" cols="3" class="form-control form-control-sm"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="text" class="form-control form-control-sm" name="precio" id="precio"
                                    placeholder="Ingrese Precio">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="number" class="form-control form-control-sm" name="cantidad" id="cantidad"
                                    placeholder="Ingrese Cantidad">
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <input type="button" value="Registrar" id="registrar" class="btn btn-success btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8">

            <div class="row">
                    <div class="col-lg-12 ml-auto">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control form-control-sm">
                                <br>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-responsive">
                            <thead class="table-dark">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>

                            <tbody id="resultado">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
<script src="static/js/script.js"></script>


</html>