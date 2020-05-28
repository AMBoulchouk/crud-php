<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ingresar Libro</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <header>
                        <h1>
                            Ingresa los datos del libro
                        </h1>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-12 col-md-6 text-center">
                    <form action="administrar_libro.php" method="POST">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                Nombre libro:
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" name="nombre">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                Autor:
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" name="autor">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                Fecha Edicion:
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="date" name="edicion">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="hidden" name="insertar" value="insertar">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <a href="index.php">Inicio</a>
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="submit" value="Guardar">
                            </div>
                            <div class="col-12 col-md-4">
                                <a href="mostrar.php">Ver</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>

        <style>
        h1 {
            padding: 3%;
        }
        div {
            padding: 1%;
        }
        </style>
        
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>