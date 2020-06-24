<!doctype html>

<?php
//incluyo la conexion a la bbdd
include_once "config/conexion.php";
?>
<html lang="es">

<head>

    <meta charset="utf-8" />

    <title>Noodel</title>

    <meta name="description" content="Ejercicios de HTML5 en
        el curso de Desarrollo de Aplicaciones Web" />

    <meta name="keywords" content="html, css, javascript, PHP, Bootstrap" />

    <meta name="author" content="Moises Acedo" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="assets/img/fav-icon.png"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-43.css"/>

    <!-- Iconos de fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Mi hoja de estilos-->
    <link rel="stylesheet" href="css/styles.css" />

    <!-- Mi código Javascript-->
    <script src="js/main.js" type="application/javascript" defer></script>
</head>

<body>
    <header>

    </header>
    <nav>

    </nav>

    <aside>

    </aside>

    <main class="container">

    <div class="row">
    <div class="col-4"></div>
    <div class="col-4 text-center">
    
    <img class="w-100" src="assets/img/logo.png">
    <form action="busqueda.php" method="get">
        <div class="">
            <input oninput="sugerencias(this.value)" type="search" class="form-control radius shadow" id="busqueda" name="busqueda">
            
            
        </div>
        


    </form>
    
    
    </div>
    </div>

    <div class="col-12" id="resultado-sugerencias"></div>

    </div>

        


        

    </main>

    <footer>

    </footer>

    <!-- BootStrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>