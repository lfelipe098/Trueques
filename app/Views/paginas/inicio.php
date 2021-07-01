<!DOCTYPE html>
<?php
  use App\Controllers\Registro;
  $hola = new Registro;
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Inicia sesión</title>
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
                <?php $label="Intercambio de articulos en la comunidad BUAP"; $guarda=$hola->encrypt($label);echo($guarda);
                    //echo($hola->decrypt($guarda))?>
               </p>
            </div>
               <div class="column">
                <form class="box" action="/Registro/logging" method="post">
                    <p class="x has-text-centered"><?php $label1 = "¿Ya tienes cuenta? Inicia sesion";
                                                  $guarda=$hola->encrypt($label1);echo($guarda);
                                                  //echo($hola->decrypt($guarda))?></p>
                    <p class="title is-1"></p>
                    <div class="columns">
                        <div class="column">
                            <label class="label"><?php $label2 = "Correo electronico";
                                                  $guarda=$hola->encrypt($label2);echo($guarda);
                                                  //echo($hola->decrypt($guarda))?></label>
                            <label class="label"><?php $label3 = "Contraseña";
                                                  $guarda=$hola->encrypt($label3);echo($guarda);
                                                  //echo($hola->decrypt($guarda))?></label>
                        </div>
                        <div class="column">
                            <input class="input is-info" type="email" name="email" placeholder= 
                              <?php $label20 = "alex@example.com";
                                $guarda = $hola->encrypt($label20);
                                echo($guarda);
                    //echo($hola->decrypt($guarda))
                                //<input class="input" type="email" name="email" placeholder="alex@example.com">
                              ?>>
                            
                            <input class="input" type="password" name="password" placeholder="********">
                        </div>
                    
                        <div class="column">
                            <button class="button is-primary is-fullwidth" type="submit">
                              <?php $label4 = "Iniciar sesion";
                              $guarda = $hola->encrypt($label4);
                              echo($guarda);
                    //echo($hola->decrypt($guarda));                              
                              ?>
                            </button>
                            <a href="/Registro/recupera_contrasena/">
                              <?php $label15 = "¿Olvidaste tu contraseña";
                                $guarda = $hola->encrypt($label15);
                                echo($guarda);
                    //echo($hola->decrypt($guarda))
                              ?>
                            </a>
                        </div>
                    </div>
                  </form>
               </div>
            </div>
        </div>
      </section>
</header>

<body>
    <div class="columns">
        <div class="column is-1"></div>
        <div class="column is-6">
            <div class="content is-size-3 has-text-justified">
                <p>


                </p>
                    <p> <?php
                    $label6 = "BUAP es una plataforma que te permite realizar intercambios de materiales, herramientas, libros y otras cosas que puedan servirte durante tus estudios.";
                    $guarda = $hola->encrypt($label6);
                    echo($guarda);
                    //echo($hola->decrypt($guarda))?>
                    </p>
                    <p><?php
                    $label7 = "Registrate ahora y encuentra lo que buscas. Es totalmente gratis";
                    $guarda = $hola->encrypt($label7);
                    echo($guarda);
                    //echo($hola->decrypt($guarda))?>
                    </p>
            </div>
        </div>
        
        <div class="column is-1"></div>

        <div class="column">
            <form action="/Registro/crearUsuario" method="post">
            <div class="field">
                <label class="label">
                  <?php $label8 = "Correo Electronico";
                    $guarda = $hola->encrypt($label8);
                    echo($guarda)
                    //echo($hola->decrypt($guarda))
                  ?>
                </label>
                <div class="control">
                  <input class="input is-info" type="email" name="email" placeholder= 
                    <?php $label20 = "yopuesquienmas@example.com";
                      $guarda = $hola->encrypt($label20);
                      echo($guarda);
                    //echo($hola->decrypt($guarda))
                    ?>>
                </div>
              </div>

              <div class="field">
                <label class="label">
                  <?php $label5 = "Contraseña";
                    $guarda = $hola->encrypt($label5);
                    echo($guarda);
                    //echo($hola->decrypt($guarda))
                  ?>
                </label>
                <div class="control">
                  <input class="input is-info" type="password" name="password" placeholder="**********">
                </div>
              </div>

            <div class="field">
                <label class="label">
                  <?php $label9 = "Nombre completo";
                    $guarda = $hola->encrypt($label9);
                    echo($guarda);
                    //echo($hola->decrypt($guarda))
                  ?>
                </label>
                <div class="control">
                  <input class="input is-info" type="text" name="text" placeholder=
                    <?php $label20 = "Juanito Perez";
                      $guarda = $hola->encrypt($label20);
                      echo($guarda);
                    //echo($hola->decrypt($guarda))
                    ?>>
                </div>
              </div>
              
              <div class="field">
                <label class="label">
                  <?php $label10 = "Numero Telefonico";
                    $guarda = $hola->encrypt($label10);
                    echo($guarda);
                    //echo($hola->decrypt($guarda))
                  ?>
                </label>
                <div class="control">
                  <input class="input is-info" type="tel" name="tel" placeholder="9876543210">
                </div>
              </div>

              <div class="field">
                <label class="label">
                  <?php $label11 = "Fecha de nacimiento";
                    $guarda = $hola->encrypt($label11);
                    echo($guarda);
                    //echo($hola->decrypt($guarda))
                  ?>
                </label>
                <div class="control">
                  <input type="date" name="date">
                </div>
              </div>
              
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" name="checkbox">
                      <?php $label13 = "I agree to the";
                        $guarda = $hola->encrypt($label13);
                        echo($guarda);
                    //echo($hola->decrypt($guarda))
                      ?>
                     <a href="#">
                      <?php $label13 = "terms and conditions";
                          $guarda = $hola->encrypt($label13);
                          echo($guarda);
                    //echo($hola->decrypt($guarda))
                      ?>
                     </a>
                  </label>
                </div>
              </div>
              
                <div class="control">
                  <button class="button is-link is-large is-fullwidth" type="submit" name="submit">
                    <?php $label14 = "Registrate";
                      $guarda = $hola->encrypt($label14);
                      echo($guarda);
                    //echo($hola->decrypt($guarda))
                    ?>
                  </button>
                </div>
            </form>
        </div>
        <div class="column is-1"></div>

    </div>
</body>