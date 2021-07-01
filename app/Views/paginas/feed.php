<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Truequeo BUAP</title>
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
    <div class='content'>
        </br>
        <div class="columns">
                <div class="column is-5"></div>
                <h1>¡BIENVENIDO!</h1>
        </div>
        <div class="columns">
            <div class="column is-4"></div>
            <div class="column is-3">
                <h3>¿Quieres iniciar un trueque?</h3>
            </div>
            <div class="column is-1">
                
                <a class="button is-info" href="/Usuario/nuevoPost/" >Inicia tu trueque</a>
            </div>
        </div>  
    </div>

    <div class="box">
        <div class="rows">
            <div class = columns>
                <article class="media">
                    <div class="media-left">
                        <div class="column is-1">
                            <figure class="image is-128x128">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                    </div>
                    <?php 
                        use App\Models\Publicaciones;
                        use App\Models\Modelo;

                        $model = new Publicaciones;
                        $modelo_usuario = new Modelo;
                        $mostrar = $model->asArray()->orderBy('id', 'desc')->findAll();
                    ?>
                    <div class="media-content">
                        <div class="column is-half">
                            <div class="content">
                                <p>
                                    <strong>
                                        <?php
                                            echo ($mostrar[0]['titulo']);
                                        ?>
                                    </strong>
                                    <br>
                                    <?php 
                                        $usuarios = $modelo_usuario->asArray()->orderBy('id', 'desc')->findAll();
                                        #echo ($usuarios[0]['nombre']);
                                    ?>
                                    <br>
                                    <?php 
                                    echo ($mostrar[0]['descripcion']);
                                    ?>
                                </p>
                            </div>  
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="content">
                            <p>
                                <strong>Categoría: </strong> libros</br>
                                <strong>Antigüedad: </strong> 
                                    <?php 
                                        echo ($mostrar[0]['fecha']);
                                    ?>
                                </br>
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        </br></br>
                        <button class="button is-info">¡Haz un trueque!</button>
                    </div>
                </article>
            </div>

            <div class = columns>
                <article class="media">
                    <div class="media-left">
                        <div class="column is-1">
                            <figure class="image is-128x128">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                        </div>
                    </div>
                    
                    <div class="media-content">
                        <div class="column is-half">
                            <div class="content">
                                <p>
                                    <strong>
                                        <?php
                                            echo ($mostrar[1]['titulo']);
                                        ?>
                                    </strong>
                                    <br>
                                    <?php 
                                        $usuarios = $modelo_usuario->asArray()->orderBy('id', 'desc')->findAll();
                                        #echo ($usuarios[1]['nombre']);
                                    ?>
                                    <br>
                                    <?php 
                                    echo ($mostrar[1]['descripcion']);
                                    ?>
                                </p>
                            </div>  
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="content">
                            <p>
                                <strong>Categoría: </strong> libros</br>
                                <strong>Antigüedad: </strong> 
                                    <?php 
                                        echo ($mostrar[1]['fecha']);
                                    ?>
                                </br>
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        </br></br>
                        <button class="button is-info">¡Haz un trueque!</button>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div>
        <nav class="pagination is-right" role="navigation" aria-label="pagination">
            
            
            <ul class="pagination-list">
                <a class="pagination-previous">Pr</a>
                <li><a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a></li>
                <li><a class="pagination-link" aria-label="Goto page 2">2</a></li>
                <li><a class="pagination-link" aria-label="Goto page 3">3</a></li>
                <a class="pagination-next">Next page</a>
            </ul>
        </nav>
    </div>
</body>
