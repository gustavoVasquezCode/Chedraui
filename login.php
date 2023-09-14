<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Iniciar sesion </h2>
    <h2 class="inactive underlineHover">Crear cuenta </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/logo_chedraui_login.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Correo">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Iniciar sesion">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">¿Olvidaste tu contraseña?</a>
    </div>

  </div>
</div>
</body>
</html>