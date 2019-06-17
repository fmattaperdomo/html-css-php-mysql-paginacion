<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
    <title>Paginación</title>
    <link rel="stylesheet" href="css/normalize.css">    
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Artículos</h1>
        <section class="articulos">
            <ul>
                <?php foreach($articulos as $articulo):  ?>
                    <li><?php echo $articulo['id']  . ' - ' . $articulo['articulo'] ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="paginacion">
            <ul>
                <!-- Establecemos cuando el botón "anterior" estara deshabilitado  -->
                <?php if ($pagina == 1):    ?>
                    <li class="disabled">&laquo;</li>    
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>    
                <?php endif; ?>
                <!-- Ejecutamos el cliclo para mostrar las páginas  -->
                <?php
                    for($i=1; $i <= $numeroPagina ; $i++){
                        if ($pagina == $i){
                            echo  "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                        }else {
                            echo  "<li><a href='?pagina=$i'>$i</a></li>";
                        }
                    }
                ?>
                <!-- Establecemos cuando el botón "siguiente" estara deshabilitado  -->
                <?php if ($pagina == $numeroPagina):    ?>
                    <li class="disabled">&raquo;</li>    
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>    
                <?php endif; ?>
        </section>
    </div>
</body>
</html>