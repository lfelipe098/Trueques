<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Recupera contraseña </title>
</head>

<header>
    <section class="hero is-link">
        <div class="hero-body">
            <div class="columns">
            <div class="column is-three-fifths">
              <p class="title is-size-1">
                <span class="icon">
                  <i class="fas fa-train"></i>
                </span>
                Truequeo BUAP
               </p>
            </div>
               <div class="column">
               <form class="box" action="/Registro/logging" method="post">
                    <div class="columns">
                        <div class="column">
                            <label class="label">Correo Electronico</label>
                            <label class="label">Contraseña</label>
                        </div>
                        <div class="column">
                            <input class="input" type="email" name="email" placeholder="alex@example.com">
                            <input class="input" type="password" name="password" placeholder="********">
                        </div>
                    
                        <div class="column">
                        <button class="button is-primary is-fullwidth" type="submit">Iniciar sesion</button>
                    </div>
                  </form>
               </div>
            </div>
        </div>
      </section>
</header>

<body>
    <div class="columns">
    <div class="column is-3"></div><!--este es el espacio de en medio-->

        <div class="column"><!--la columna del formulario-->
            <div class="block">
                <div class="content is-size-3 has-text-centered"><p></p><p></p> Introduce tu correo</div>
                <div class="control">
                  <input class="input is-info" type="email" placeholder="yopuesquienmas@example.com">
                  <p></p>
                </div>
            </div>
                <div class="block">
                <div class="control">
                    <button class="button is-link is- is-fullwidth" type="submit">Enviar</button>
                  </div>
                </div>
              
        </div>
              
    <div class="column is-3"></div>
    
    </div>
</body>