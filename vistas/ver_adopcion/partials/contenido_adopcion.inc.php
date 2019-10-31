<?php

    $conexion = new mysqli("localhost", "root", "", "roko");

    $cat  = 1;
    if ( isset( $_GET["cat"] ) ){
        $cat  = $_GET["cat"] ;
    }
?>

<div class="row">
        <div class="col-md-12">
            <h3 >

                <?php

                    $sql = "SELECT * FROM cat_animal WHERE id_cat_animal = " .  $cat ;

                    $resultado = $conexion->query($sql);

                    $categoria = $resultado->fetch_assoc();

                ?>

                Avisos adopcion de <?= $categoria["cat_animal_descripcion"] ?> 
            </h3>
            <nav>
                <ol class="breadcrumb">
                   
                    <?php

                        $sql = "SELECT * FROM cat_animal";

                        $resultado = $conexion->query($sql);

                        foreach ($resultado as $categoria) {
                    ?>

                            <li class="breadcrumb-item active">
                                <a href="index.php?m=adopcion&cat=<?= $categoria['id_cat_animal']?>"><?= $categoria['cat_animal_descripcion']?></a>
                            </li>
  
                    <?php
                        }
                    ?>

                </ol>
            </nav>
            <div class="row">
                
                <?php



                    $sql = "SELECT * FROM publicacion WHERE id_cat_animal=" . $cat  . " AND id_tipo_publicacion=3";

                    $resultado = $conexion->query($sql);

                    foreach ($resultado as $perdido) {

                ?>

                    <div class="col-md-2">

                        <div class="card">
                            <h5 class="card-title">
                                    Adopcion
                                </h5>
                            <img class="card-img-top" alt="Bootstrap Thumbnail First" src="archivos/<?=$perdido["imagen"] ?>">
                            <div class="card-block">
                                <h5 class="card-title">
                                    <?= $perdido["titulo"] ?>
                                </h5>
                                <p class="card-text">
                                    <?= $perdido["fecha"] ?><br/>
                                    <?= $perdido["direccion"] ?><br/>
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="#">Lo vi!</a>
                                    <a class="btn btn-secundary" href="#">Ampliar</a>
                                </p>
                            </div>
                        </div>

                    </div>

                <?php } ?>


            </div>

            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Anterior</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">próximo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>