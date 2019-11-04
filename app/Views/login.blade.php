<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="assets/lte/dist/img/logo.png">
        <title>Redes De Solidaridad</title> <!-- Titulo de la pagina-->
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body >
<form name="login" action="inicio">
<div class="wrapper">
  <div class="rec-prism">
    <div class="face face-front">
      <div class="content">
        <h2>Inicio de Sesion</h2>
        <form onsubmit="">
          <div class="field-wrapper">
            <input type="text" name="username" placeholder="username">
            <label>Usuario</label>
          </div>
          <div class="field-wrapper">
            <input type="password" name="password" placeholder="password" autocomplete="new-password">
            <label>Contraseña</label>
          </div>
          <div class="field-wrapper">
            <input  style="text-align: center;" id="exito" type="" value="Enviar" onclick="showThankYou()">
          </div>
          <span class="psw" onclick="showForgotPassword()">olvido su contraseña?   </span>
        </form>
      </div>
    </div>
    
    <div class="face face-back">
      <div class="content">
        <h2>Forgot your password?</h2>
        <small>Enter your email so we can send you a reset link for your password</small>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="email" placeholder="email">
            <label>e-mail</label>
          </div>
          <div class="field-wrapper">
            <input type="submit" onclick="showThankYou()">
          </div>
        </form>
      </div>
    </div>
    <div class="face face-bottom">
      <div class="content">
        <div class="thank-you-msg">
          Bienvenido!
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript" src="login.js"> </script>
</body>
</html>


