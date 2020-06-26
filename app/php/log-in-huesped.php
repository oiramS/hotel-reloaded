<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/log-in.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
    <link rel="icon" href="../../favicon-32x32.png">
    <title>Inicio de Sesión</title>
</head>
<body>
    <header>
        <h1>EL DESCANSO MEDIEVAL</h1>
        <?php
            date_default_timezone_set("America/Mexico_City");
            $usrnm = "Mario";
            echo '<h3>Bienvenido, '.$usrnm.'!</h3>';
            echo '<h3>Hoy es: '.date("d/m/Y").'</h3>';

        ?>
    </header>

    <nav>
        <a href="log-in-huesped.php?id=home">Inicio</a>
        <a href="log-in-huesped.php?id=rsvp">Reservar Habitación</a>
        <a href="log-in-huesped.php?id=services">Servicios Adicionales</a>
        <a href="log-in-huesped.php?id=close" class="close">Cerrar Sesión</a>
    </nav>

    <div class="container">
        <?php
            if(!empty($_GET["id"]))
                $id = $_GET["id"];
            else
                $id = "home";
            switch($id){
                case "home":
                    require 'inicio.php';
                break;
                case "rsvp":
                    require 'rsvp.php';  
                break;
                case "services":
                    require 'services.php';
                break;
                case "close":
                    require 'close.php';
                break;
            }
        ?>
    </div>

</body>
</html>