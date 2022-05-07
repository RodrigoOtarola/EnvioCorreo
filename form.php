<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Google Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Formulario</title>
</head>
<body>
<form action="enviarCorreo.php" method="POST">
    <div class="container section">
        <div class="row card-panel">
            <div class="input-field col s12 m6 l6">
                <input type="text" id="name" name="nombre" class="validate" required>
                <label for="name">Nombre:</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input type="text" id="apellidos" name="apellidos" class="validate" required>
                <label for="apellidos">Apellidos:</label>
            </div>
            <div class="input-field col s12 m6">
                <input type="email" id="email" name="email" class="validate" required>
                <label for="email">E-mail:</label>
            </div>
            <div class="input-field col s12 m6">
                <input type="text" name="tel" id="tel" class="validate" required>
                <label for="tel">Teléfono:</label>
            </div>
            <div class="input-field col s12 m6">
                <input type="text" id="asunto" name="asunto" class="validate" required>
                <label for="asunto">Asunto:</label>
            </div>
            <div class="input-field col s12 m12">
                <textarea id="textarea" name="comentarios" class="materialize-textarea"></textarea>
                <label for="textarea">Comentarios</label>
            </div>
            <div class="col s12">
                <button type="submit" class="btn red">Enviar</button>
            </div>
        </div>
</form>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.autocomplete');
        var instances = M.Autocomplete.init(elems);
    });
</script>
</body>
</html>