<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <title id="cabecera">Registro</title>
        <link rel="stylesheet" type="text/css" href="estilos.css" />
        <script src="Script6.js"></script>
        <style {csp-style-nonce}>
            @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html {
  font-family: 'Montserrat', Arial, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
  background: #eef3c9;
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, input, select, textarea {
  color: #5A5A5A;
  font: inherit;
  margin: 0;
}

input {
  line-height: normal;
}

textarea {
  overflow: auto;
}

#container {
  background: #f7ffb7;
  border: solid 4px #312f2e;
  max-width: 768px;
  margin: 60px auto;
  position: relative;
}

form {
  padding: 40px;
  margin: 50px 0;
}

h1 {
  color: #252424;
  font-size: 32px;
  font-weight: 700;
  letter-spacing: 3px;
  text-align: center;
  text-transform: uppercase;
}

.upline {
  padding-top: 5%;
  border-bottom: solid 3px #312f2e;
  margin: auto;
  width: 550px;
}

.underline {
  border-bottom: solid 3px #312f2e;
  margin: -0.512em auto;
  width: 600px;
}

.instructions {
  padding-top: 4%;
  color: #252424;
  font-size: 28px;
  font-weight: 500;
  letter-spacing: 2px;
  text-align: center;
  text-transform: uppercase;
}

.icon {
  display: block;
  fill: #474544;
  height: 50px;
  margin: 0 auto;
  width: 50px;
}

.tutor {
	width: 100%;
}

input[type='text'], [type='date'], select, textarea {
	background: none;
  border: none;
	border-bottom: solid 3px #312f2e;
  color: #252424;
	font-size: 1.000em;
  font-weight: 400;
  letter-spacing: 1px;
	margin: 0em 0 1.875em 0;
	padding: 0 0 0.875em 0;
  text-transform: uppercase;
	width: 100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

input[type='text']:focus, textarea:focus {
	outline: none;
	padding: 0 0 0.875em 0;
}

.message {
	float: none;
}

.name {
	width: 100%;
}

.date {
  float: left;
	width: 100%;
}

select {
  background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-down-32.png') no-repeat right;
  outline: none;
  -moz-appearance: none;
  -webkit-appearance: none;
}

select::-ms-expand {
  display: none;
}

.subject {
    float: right;
	width: 45%;
}

.curp {
  float: left;
	width: 45%;
}

.folio {
  float: left;
	width: 70%;
}

.search {
  float: right;
}

textarea {
	line-height: 150%;
	height: 150px;
	resize: none;
  width: 100%;
}

::-webkit-input-placeholder {
	color: #474544;
}

:-moz-placeholder { 
	color: #474544;
	opacity: 1;
}

::-moz-placeholder {
	color: #474544;
	opacity: 1;
}

:-ms-input-placeholder {
	color: #474544;
}

#form_button {
  background:#c5ce82;
  border-radius: transparent 80px #4d3e37;
  color: #252424;
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica', Arial, sans-serif;
  font-size: 0.875em;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

#form_button:hover {
  background: #252424;
  color: #F2F3EB;
}

#search_button {
  background:#c5ce82;
  border-radius: transparent 80px #4d3e37;
  color: #252424;
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica', Arial, sans-serif;
  font-size: 0.875em;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

#search_button:hover {
  background: #252424;
  color: #F2F3EB;
}

@media screen and (max-width: 768px) {
  #container {
    margin: 20px auto;
    width: 95%;
  }
}

@media screen and (max-width: 480px) {
  h1 {
    font-size: 26px;
  }
  
  .underline {
    width: 68px;
  }
  
  #form_button {
    padding: 15px 25px;
  }

  #search_button {
    padding: 15px 25px;
  }
}

@media screen and (max-width: 420px) {
  h1 {
    font-size: 18px;
  }
  
  .icon {
    height: 35px;
    width: 35px;
  }
  
  .underline {
    width: 53px;
  }
  
  input[type='text'], [type='tutor'], select, textarea {
    font-size: 0.875em;
  }
}
        </style>
    </head>
    <body>
        <div id="container">
            <div class="upline">
            </div>
            <h1> Solicitud del aspirante </h1>
            <div class="underline">
            </div>
            <div class="instructions">
                <p>Datos del aspirante
                </p>
            </div>
            <form id="registry_form">
                <div class="name">
                    <label for="name"></label>
                    <input type="text" placeholder="Nombre" name="name" id="name_input" required>
                </div>
                <div class="tutor">
                    <label for="name"></label>
                    <input type="text" placeholder="Tutor" name="tutor" id="tutor_input" required>
                </div>
                <div class="curp">
                    <label for="name"></label>
                    <input type="text" placeholder="CURP" name="curp" id="curp_input" required>
                </div>
                
                <div class="subject">
                    <label for="subject"></label>
                    <select placeholder="Subject line" name="subject" id="subject_input" required>
                    <option disabled hidden selected>Sexo</option>
                    <option>Masculino</option>
                    <option>Femenino</option>
                    </select>
                </div>
                <div class="date">
                    <label for="date">FECHA DE NACIMIENTO</label>
                    <input type="date" placeholder="Fecha de nacimiento" name="date" id="date">
                </div>
                <div class="edad">
                    <label for="edad"></label>
                    <input type="text" placeholder="EDAD" name="age" id="age_input" required>
                </div>

                <div class="submit">
                    <input type="button" value="Registrar" id="form_button" onclick="registrar()"/>
                    <label id="folio_output"></label>
                </div>
            </form>
            <form id="request_form">
                <div class="folio">
                    <label for="name"></label>
                    <input type="text" placeholder="Folio" name="folio" id="folio_input" required>
                    <p id="alerta"></p>
                </div>
                <div class="search">
                    <input type="button" value="Buscar" id="search_button" onclick="buscar()"/>
                </div>
            </form>
        </div>
    </body>
</html>