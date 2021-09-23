<?php
$dominio = 'Area restringida';

// usuario => contraseña
$usuarios = array('admin' => 'micontraseña', 'invitado' => 'invitado');


if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$dominio.
           '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($dominio).'"');

    die('Error');
}


// Analizar la variable PHP_AUTH_DIGEST
if (!($datos = analizar_http_digest($_SERVER['PHP_AUTH_DIGEST'])) ||
    !isset($usuarios[$datos['username']]))
    die('Credenciales incorrectas');


// Generar una respuesta válida
$A1 = md5($datos['username'] . ':' . $dominio . ':' . $usuarios[$datos['username']]);
$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$datos['uri']);
$respuesta_válida = md5($A1.':'.$datos['nonce'].':'.$datos['nc'].':'.$datos['cnonce'].':'.$datos['qop'].':'.$A2);

if ($datos['response'] != $respuesta_válida)
    die('Credenciales incorrectas');

// Todo bien, usuario y contraseña válidos
$nombre=$datos['username'];


// Función para analizar la cabecera de autenticación HTTP
function analizar_http_digest($txt)
{
    // Protección contra datos ausentes
    $partes_necesarias = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $datos = array();
    $claves = implode('|', array_keys($partes_necesarias));

    preg_match_all('@(' . $claves . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $coincidencias, PREG_SET_ORDER);

    foreach ($coincidencias as $c) {
        $datos[$c[1]] = $c[3] ? $c[3] : $c[4];
        unset($partes_necesarias[$c[1]]);
    }

    return $partes_necesarias ? false : $datos;
}
?>
    <br>

    <div class="container">
      <div class='row'>
        <div class='col-md-8 card'>
          <h4 class='m-3'>Add Image</h4><hr>
          <form action='?accion=val' method='post'
           class='card-body' enctype="multipart/form-data">
            <input type='text' class='form-control mb-3'
             name='titlePost' placeholder='Title'>
            <input type='text' class='form-control mb-3'
             name='descriptionPost' placeholder='Description'>
             <input type='text' class='form-control mb-3'
              name='urlPost' placeholder='url'>



            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input"
                 id="inputGroupFile02" name='imagePost'>
                <label class="custom-file-label"
                 for="inputGroupFile02">Choose Image</label>
              </div>
            </div>

            <input type='submit' class='btn btn-block btn-primary'
             name='insertarBtn' value='Send'>
          </form>
        </div>
      </div>
    </div>
    <br>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <!-- Optional JavaScript -->
  <script>

  $('.custom-file-input').on('change', function(event) {
    var inputFile = event.currentTarget;

    $(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
  });

  </script>
  </body>
</html>
