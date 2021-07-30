<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Correo electrónico</h1>
    <p>Este es el primer correo que mandaré por Laravel</p>

    <p><strong>Nombre:</strong> {{ $contacto['name'] }}</p>
    <p><strong>Correo:</strong> {{ $contacto['correo'] }}</p>
    <p><strong>Mensaje:</strong> {{ $contacto['mensaje'] }}</p>
  </body>
</html>
