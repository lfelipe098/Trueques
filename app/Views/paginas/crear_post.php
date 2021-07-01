<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Nueva Publicación</title>
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
    </br>
    <div class="columns is-mobile">
    
    <div class="column is-half is-offset-one-quarter">
        <form action="/Usuario/crearPost" method="post" enctype="multipart/form-data">
            <div class="column is-fullwidth">
                <div class="field">
                    <label class="label">Artículo</label>
                    <div class="control">
                        <input class="input is-info" type="text" name="articulo" placeholder="">
                    </div>
                </div>
            
                <div class="field">
                    <label class="label">Antigüedad</label>
                    <div class="control">
                        <input class="input is-info" type="number" name="antiguedad" placeholder="">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Descripción</label>
                    <div class="control">
                        <input class="input is-info" type="text" name="descripcion" placeholder="">
                    </div>
                </div>
                <figure class="image is-480x480">
                    <img src="https://bulma.io/images/placeholders/480x480.png">
                </figure>
                <input class="is-light" type="file" name="image"/>
            </div>
                <a class="button is-danger" href="/Usuario/feed">Cancelar</a>
                <button class="button is-primary" type="submit" name="submit">Crear Trueque</button>
            </div>
        </form>
        </div>
    </div>
</body>