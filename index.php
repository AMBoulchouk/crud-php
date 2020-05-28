<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Libro</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <header>
                    <h1>
                        Bienvenidos al Administrador de Libros
                    </h1>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Ingresar Libro al Sistema</h5>
                                <h6 class="card-subtitle mb-2 text-muted">registro</h6>
                                <p class="card-text">Se solicitará Titulo del libro, Autor y Fecha de publicación.</p>
                                <a href="ingresar.php">Ingresar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Ver Libros en el Sistema</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Todos los libros</h6>
                                <p class="card-text">Se verán los registros en el sistema sin orden.</p>
                                <a href="mostrar.php">Listar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
            </div>
            <div class="row">
                <div class="col text-center fixed-bottom">
                    <footer>
                        Administrar Libro 2020
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <style>
        h1 {
            padding: 3%;
        }
    </style>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>