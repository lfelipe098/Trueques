<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Administracion</title>
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
          <div class="navbar-start">
            <a class="navbar-item" href="/Administrar/post/">
              Publicaciones 
            </a>
      
            <a class="navbar-item" href="/Administrar/user/">
              Usuarios
            </a>
      
            
          </div>
      
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
</header>

<body>
  <br>
    <div class="columns">
        <div class="column is-1"></div>

        <div class="column is-5">       
            <div class="block">

            <div class="card">

                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                  </figure>
                </div>

                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                      </figure>
                    </div>

                    <div class="media-content">
                      <p class="title is-4">Libro Como programar en Java</p>
                      <p class="subtitle is-6">Juan Perez</p>
                    </div>
                  </div>
              
                  <div class="content">
                    Estado: Seminuevo
                    <br>
                    Edicion: 5
                    <br>
                    Intereses: Algun otor libro de programacion
                    <br>
                    Puntos de intercambio: Facultad de Ciencias de la computacion
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                  </div>

                  <footer class="card-footer">
                    <a href="#" class="card-footer-item">Descartar</a>
                    <a href="#" class="card-footer-item">Borrar</a>
                  </footer>

                </div>
            </div>
                
            </div>
           <div class="block">
            <div class="card">

                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                  </figure>
                </div>

                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                      </figure>
                    </div>

                    <div class="media-content">
                      <p class="title is-4">Libro Como programar en Java</p>
                      <p class="subtitle is-6">Juan Perez</p>
                    </div>
                  </div>
              
                  <div class="content">
                    Estado: Seminuevo
                    <br>
                    Edicion: 5
                    <br>
                    Intereses: Algun otor libro de programacion
                    <br>
                    Puntos de intercambio: Facultad de Ciencias de la computacion
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                  </div>

                  <footer class="card-footer">
                    <a href="#" class="card-footer-item">Descartar</a>
                    <a href="#" class="card-footer-item">Borrar</a>
                  </footer>

                </div>
                <br>
            </div>
            </div>
        </div>
        <div class="column is-5">
            <div class="block">

                <div class="card">
    
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                      </figure>
                    </div>
    
                    <div class="card-content">
                      <div class="media">
                        <div class="media-left">
                          <figure class="image is-48x48">
                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                          </figure>
                        </div>
    
                        <div class="media-content">
                          <p class="title is-4">Libro Como programar en Java</p>
                          <p class="subtitle is-6">Juan Perez</p>
                        </div>
                      </div>
                  
                      <div class="content">
                        Estado: Seminuevo
                        <br>
                        Edicion: 5
                        <br>
                        Intereses: Algun otor libro de programacion
                        <br>
                        Puntos de intercambio: Facultad de Ciencias de la computacion
                        <br>
                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                      </div>
    
                      <footer class="card-footer">
                        <a href="#" class="card-footer-item">Descartar</a>
                        <a href="#" class="card-footer-item">Borrar</a>
                      </footer>
    
                    </div>
                </div>
                    
                </div>
               <div class="block">
                <div class="card">
    
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                      </figure>
                    </div>
    
                    <div class="card-content">
                      <div class="media">
                        <div class="media-left">
                          <figure class="image is-48x48">
                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                          </figure>
                        </div>
    
                        <div class="media-content">
                          <p class="title is-4">Libro Como programar en Java</p>
                          <p class="subtitle is-6">Juan Perez</p>
                        </div>
                      </div>
                  
                      <div class="content">
                        Estado: Seminuevo
                        <br>
                        Edicion: 5
                        <br>
                        Intereses: Algun otor libro de programacion
                        <br>
                        Puntos de intercambio: Facultad de Ciencias de la computacion
                        <br>
                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                      </div>
    
                      <footer class="card-footer">
                        <a href="#" class="card-footer-item">Descartar</a>
                        <a href="#" class="card-footer-item">Borrar</a>
                      </footer>
    
                    </div>
                    <br>
                </div>
                </div>
        </div>

        <div class="column is-1"></div>
    </div>
</body>