<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Déjanos un mensaje</h1>

    <form action="{{ route('contactanos.store') }}" method="post">

      <!--TOKEN CSRF-->
      @csrf
      <label>
        Nombre:
        <br>
        <input type="text" name="name">
      </label>
      <br>

      @error('name')
        <p><strong>{{ $message }}</strong>
      @enderror

      <label>
        Correo:
        <br>
        <input type="text" name="correo">
      </label>
      <br>

      @error('correo')
        <p><strong>{{ $message }}</strong>
      @enderror

      <label>
        Mensaje:
        <br>
        <textarea name="mensaje" rows="4"></textarea>
      </label>
      <br>

      @error('mensaje')
        <p><strong>{{ $message }}</strong>
      @enderror


      <button type="submit">Enviar mensaje</button>
    </form>

  @if(session('info'))
  <script>
    alert("{{ session('info') }}");
  </script>
  @endif

  </body>
</html>
