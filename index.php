<?php
// Init + Start session
error_reporting(E_ALL & ~E_NOTICE);
session_start();

// Redirect users to the main page if already signed in
if ($_SESSION['session'] == 1) {
  header("Location: main.php");
  die();
}
?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio sesión</title>

    <link rel="shortcut icon" type="image/x-icon" href="resources/images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico|Lato|Playfair+Display&display=swap" rel="stylesheet">
    <link href="resources/css/index.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/be3111f231.js" crossorigin="anonymous"></script>

</head>

<script>
    function hideLoader() {
        $('.loader').fadeOut("slow");

    }

</script>

<body onload="hideLoader()" style="padding:0 !important;">
    <div class="loader">
        <div class="rhombus">
            <div class="circle1"></div>
            <div class="circle2"></div>
        </div>
    </div>
    <div id="contenedor-login" class="container-fluid">
        <div class="input-container">
            <form id="loginForm" class="was-validated" method="post" action="validarLogin.php">
                <h6 class="mb-4">*Introduce el código del Save the date</h6>
                <div class="input-group">
                    <label for="inputLogin mb-2" class="sr-only">Código</label>
                    <input type="text" class="form-control" id="inputLogin" name="inputLogin" placeholder="Introduce el código..." required>
                    <div class="input-group-append">
                        <input id="loginButton" type="submit" class="btn btn-primary" value="Entrar">
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>


</html>
