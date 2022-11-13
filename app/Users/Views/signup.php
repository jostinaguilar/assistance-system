<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up | Assist Sys</title>
</head>

<body>

  <form action="/register" method="POST">
    <div>
      <label for="name">Nombre</label>
      <input type="text" name="name" id="name" placeholder="Tu Nombre" autocomplete="off" autofocus>
    </div>
    <div>
      <label for="surname">Apellidos</label>
      <input type="text" name="surname" id="surname" placeholder="Tu Apellido" autocomplete="off">
    </div>
    <div>
      <label for="email">Correo Electrónico</label>
      <input type="email" name="email" id="email" placeholder="tunombre@dominio.com" autocomplete="off">
    </div>
    <div>
      <label for="nameUser">Nombre de Usuario</label>
      <input type="text" name="nameUser" id="nameUser" placeholder="Tu Usuario" autocomplete="off">
    </div>
    <div>
      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" placeholder="Tu Contraseña" autocomplete="off">
    </div>
    <div>
      <label for="passwordRepeat">Repetir Contraseña</label>
      <input type="password" name="passwordRepeat" id="passwordRepeat" placeholder="Repite tu Contraseña" autocomplete="off">
    </div>
    <div>
      <input type="submit" value="Sign Up">
    </div>
  </form>

</body>

</html>