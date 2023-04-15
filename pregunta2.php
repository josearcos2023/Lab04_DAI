<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Pregunta 2 PHP</title>
</head>
<body>
    
    <?php
    /*Se dan valores a las variables, tomando los valores ingresados por el usuario y enviados por el método POST*/
            $nom = $_POST["nom"];
            $dir = $_POST["dir"];
            $email = $_POST["email"];
            $age = $_POST["age"];
    ?>
    <div class="container-fluid">
        <div class="row pt-4">
            <div class="col-12">
                <div class="card text-bg-success">
                    <h5 class="card-header text-center">Bienvenido</h5>
                    <div class="card-body">
    <!-- Se ingresan las variables cuyos valores ya han sido definidos -->
                        <p>¡Hola <?php echo $nom; ?>!</p>
                        <p>Tu dirección es <?php echo $dir; ?></p>
                        <p>Tienes <?php echo $age; ?> años y tu correo es <?php echo $email; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>