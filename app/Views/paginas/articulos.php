<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Mis Articulos</title>
</head>

<header>
<section class="hero is-small is-link">
  <div class="hero-body">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <p class="title is-2">Truequeo BUAP</p>
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          
          <div class="navbar-end">
            <div class="navbar-item">
                <p><?php echo session('correo'); ?></p>
            </div>
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-danger" href="/Registro/loggout">
                  <strong>Cerrar Sesion</strong>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
  </div>
    </section>


    <section class="hero is-info">
        <div class="columns">
            <div class="column is-1"></div>
            <div class="column is-three-quarters">
                <nav class="level">
                    <p class="level-item has-text-centered">
                        <a class="link is-info" href="/Usuario/feed">INICIO</a>
                    </p>
                    <p class="level-item has-text-centered">
                        <a class="link is-info">CATEGORÍAS</a>
                    </p>

                    <p class="level-item has-text-centered">
                      <a class="link is-info" href="/Usuario/misArticulos">MIS ARTICULOS</a>
                    </p>
                    <p class="level-item has-text-centered">
                        <a class="link is-info">CONTACTO</a>
                    </p>
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" placeholder="Estoy buscando un...">
                        </div>
                    </div>
                </nav>
            </div>
            <div class="column is-1">
                <button class="button is-light">Buscar</button>
            </div>
        </div>
    </section>
</header>

<body>
<?php 

use App\Models\Publicaciones;
use App\Models\Modelo;

$modelo_usuario = new Modelo;
$modelo_post = new Publicaciones;

$mostrar = $modelo_usuario->asArray()->findAll();
$publicacion = $modelo_post->asArray()->where('id_usuario', session('id'))->findAll();
?>
<br>
    <div class="rows">
    <?php
    foreach($publicacion as $campos){?>
        <div class="card">
            <div class="card-content">
                <div class="media">
                <p class="media-left">
                <figure class="media-left">
                  <p class="image is-256x256">
                    <img src='data:image/jpeg;base64,<?php echo base64_encode($campos['imagen']); ?>' alt="image">
                  </p>
                </figure>
                </p>
                <div class="media-content">
                  <div class="content">
                    <p class="title is-5">
                        <strong>
                        <?php
                          echo ($campos['titulo']);
                        ?>
                        </strong>
                    </p>
                    Antigüedad: 
                    <?php
                        echo ($campos['fecha']);
                    ?>
                    <br>
                    Descripción: 
                    <?php
                        echo ($campos['descripcion']);
                    ?>
                    <br>
                    Puntos de intercambio: Facultad de Ciencias de la computacion
                    <br>    
                    </div>
                    <p class="title is-4">
                    </p>
                    <p class="subtitle is-6"></p>
                  </div>
                </div>

                <footer class="card-footer">
                <a href="#" class="card-footer-item">Borrar</a>
                </footer>
            </div>
        </div>
    <?php } ?>
    </div>
</body>