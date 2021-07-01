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
<?php 
  use App\Models\Publicaciones;
  use App\Models\Modelo;

  $modelo_usuario = new Modelo;
  $mostrar = $modelo_usuario->asArray()->findAll();
?>
  <br>
    <div class="columns">
        <div class="column is-1"></div>

        <div class="column is-5">       
            <div class="block">

            <div class="card">

                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                      </figure>
                    </div>

                    <div class="media-content">
                      <p class="title is-4">
                        <?php
                          echo ($mostrar[0]['nombre']);
                        ?>
                      </p>
                      <p class="subtitle is-6"></p>
                    </div>
                  </div>
              
                  <div class="content">
                  Correo Electrónico: 
                    <?php
                      echo ($mostrar[0]['correo']);
                    ?>
                    <br>
                    Número de teléfono: 
                    <?php
                      echo ($mostrar[0]['telefono']);
                    ?>
                    <br>
                    Año de nacimiento: 
                    <?php
                      echo ($mostrar[0]['edad']);
                    ?>
                    <br>
                  </div>

                  <footer class="card-footer">
                    <a href="#" class="card-footer-item">Borrar</a>
                  </footer>

                </div>
            </div>
                
            </div>

            <div class="block">

              <div class="card">
  
                  <div class="card-content">
                    <div class="media">
                      <div class="media-left">
                        <figure class="image is-48x48">
                          <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                        </figure>
                      </div>
  
                      <div class="media-content">
                        <p class="title is-4">Luis Puerto</p>
                        <p class="subtitle is-6"></p>
                      </div>
                    </div>
                
                    <div class="content">
                  Correo Electrónico: 
                    <?php
                      echo ($mostrar[0]['correo']);
                    ?>
                    <br>
                    Número de teléfono: 
                    <?php
                      echo ($mostrar[0]['telefono']);
                    ?>
                    <br>
                    Año de nacimiento: 
                    <?php
                      echo ($mostrar[0]['edad']);
                    ?>
                    <br>
                  </div>
  
                    <footer class="card-footer">
                      <a href="#" class="card-footer-item">Borrar</a>
                    </footer>
  
                  </div>
              </div>
                  
              </div>
              <div class="block">

                <div class="card">
    
                    <div class="card-content">
                      <div class="media">
                        <div class="media-left">
                          <figure class="image is-48x48">
                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                          </figure>
                        </div>
    
                        <div class="media-content">
                          <p class="title is-4">Josias Vasquez</p>
                          <p class="subtitle is-6"></p>
                        </div>
                      </div>
                  
                      <div class="content">
                  Correo Electrónico: 
                    <?php
                      echo ($mostrar[0]['correo']);
                    ?>
                    <br>
                    Número de teléfono: 
                    <?php
                      echo ($mostrar[0]['telefono']);
                    ?>
                    <br>
                    Año de nacimiento: 
                    <?php
                      echo ($mostrar[0]['edad']);
                    ?>
                    <br>
                  </div>
    
                      <footer class="card-footer">
                        <a href="#" class="card-footer-item">Borrar</a>
                      </footer>
    
                    </div>
                </div>
                    
                </div>
                <div class="block">

                  <div class="card">
      
                      <div class="card-content">
                        <div class="media">
                          <div class="media-left">
                            <figure class="image is-48x48">
                              <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                            </figure>
                          </div>
      
                          <div class="media-content">
                            <p class="title is-4">Ana Ortega</p>
                            <p class="subtitle is-6"></p>
                          </div>
                        </div>
                    
                        <div class="content">
                  Correo Electrónico: 
                    <?php
                      echo ($mostrar[0]['correo']);
                    ?>
                    <br>
                    Número de teléfono: 
                    <?php
                      echo ($mostrar[0]['telefono']);
                    ?>
                    <br>
                    Año de nacimiento: 
                    <?php
                      echo ($mostrar[0]['edad']);
                    ?>
                    <br>
                  </div>
      
                        <footer class="card-footer">
                          <a href="#" class="card-footer-item">Borrar</a>
                        </footer>
      
                      </div>
                  </div>
                      
                  </div>
           
        </div>
        <div class="column is-5">
          <div class="block">

            <div class="card">

                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                      </figure>
                    </div>

                    <div class="media-content">
                      <p class="title is-4">Rodrigo Soto</p>
                      <p class="subtitle is-6"></p>
                    </div>
                  </div>
              
                  <div class="content">
                    Correo Electronico: tucorreo@gmail.com
                    <br>
                    Numero telefonico: 9711452545
                    <br>
                    Fecha de nacimiento: 24/03/1999
                    <br>
                    Fecha de registro: 
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                  </div>

                  <footer class="card-footer">
                    <a href="#" class="card-footer-item">Borrar</a>
                  </footer>

                </div>
            </div>
                
            </div>

            <div class="block">

              <div class="card">
  
                  <div class="card-content">
                    <div class="media">
                      <div class="media-left">
                        <figure class="image is-48x48">
                          <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                        </figure>
                      </div>
  
                      <div class="media-content">
                        <p class="title is-4">Andrea Villanueva</p>
                        <p class="subtitle is-6"></p>
                      </div>
                    </div>
                
                    <div class="content">
                      Correo Electronico: tucorreo@gmail.com
                      <br>
                      Numero telefonico: 9711452545
                      <br>
                      Fecha de nacimiento: 24/03/1999
                      <br>
                      Fecha de registro: 
                      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                    </div>
  
                    <footer class="card-footer">
                      <a href="#" class="card-footer-item">Borrar</a>
                    </footer>
  
                  </div>
              </div>
                  
              </div>
              <div class="block">

                <div class="card">
    
                    <div class="card-content">
                      <div class="media">
                        <div class="media-left">
                          <figure class="image is-48x48">
                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                          </figure>
                        </div>
    
                        <div class="media-content">
                          <p class="title is-4">Carlos Estrada</p>
                          <p class="subtitle is-6"></p>
                        </div>
                      </div>
                  
                      <div class="content">
                        Correo Electronico: tucorreo@gmail.com
                        <br>
                        Numero telefonico: 9711452545
                        <br>
                        Fecha de nacimiento: 24/03/1999
                        <br>
                        Fecha de registro: 
                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                      </div>
    
                      <footer class="card-footer">
                        <a href="#" class="card-footer-item">Borrar</a>
                      </footer>
    
                    </div>
                </div>
                    
                </div>
                <div class="block">

                  <div class="card">
      
                      <div class="card-content">
                        <div class="media">
                          <div class="media-left">
                            <figure class="image is-48x48">
                              <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                            </figure>
                          </div>
      
                          <div class="media-content">
                            <p class="title is-4">Diego Andrade</p>
                            <p class="subtitle is-6"></p>
                          </div>
                        </div>
                    
                        <div class="content">
                          Correo Electronico: tucorreo@gmail.com
                          <br>
                          Numero telefonico: 9711452545
                          <br>
                          Fecha de nacimiento: 24/03/1999
                          <br>
                          Fecha de registro: 
                          <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
      
                        <footer class="card-footer">
                          <a href="#" class="card-footer-item">Borrar</a>
                        </footer>
      
                      </div>
                  </div>
                      
                  </div>
        </div>

        <div class="column is-1"></div>
    </div>
</body>