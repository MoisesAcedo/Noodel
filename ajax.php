<!doctype html>
<?php

//Incluyo la conexión a la BBDD
include_once "config/conexion.php";

?>

<html lang="es">

<head>

    <meta charset="utf-8" />

    <title>Laboratorio SQL</title>

    <meta name="description" content="Ejercicios de HTML5 en
        el curso de Desarrollo de Aplicaciones Web" />

    <meta name="keywords" content="html, css, javascript, web, curso, 2019" />

    <meta name="author" content="Óscar Rey" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/fav-icon.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Iconos de fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

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

    <main>

        <h1 class="text-center mt-4">Resultados</h1>

        <?php

        //creo variable que recoge la peticion ajax
        $txtAjax = $_GET['txt-ajax'];


        $consulta = "SELECT * FROM noticias 
        WHERE cuerpo_noticia LIKE '%".$txtAjax."%'";
   
        //almaceno en una variable el resultado
        $resultado = $conexion->query($consulta);

        /* FORMA AUTOMATICA */

        //verifico que la variable $resultado almacena algún registro
        if ($resultado->num_rows > 0) {

            echo '<table class="table table-striped">';

            //recorro los registros de  $resultado
            //hay una condición que almacena en $registro los datos
            while ($registro = $resultado->fetch_assoc()) {

                
                //var_dump($registro);
                //echo "<br><br>";

                //creo una fila (cada vez que se ejecuta el while)
                echo "<tr>";

                foreach ($registro as $clave => $valor) {


                    echo "<td>$valor</td>";
                    
                    

                   
                }


                echo "</tr>";
            }
            echo '</table>';
        } else {
            echo "ERROR: No hay ningún registro que pintar";
        }



        ?>
        <article>

        </article>

        <section>

        </section>

    </main>

    <footer>

    </footer>

    <!-- BootStrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>