<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cargar Subtitulos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--ojo aqui las librerias  estan por internet el profesor no tiene internet alli hay que descargarla
en el proyecto final  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<h2>Crear Subtítulos de Video</h2>
<form action="guardar_subtitulos.php" method="post">
<div class="form-group">
      <label for="numeroLinea"><b>Numero de Linea:</b></label>
      <input type="number" class="form-control" id="numeroLinea" placeholder="numero de linea" name="numeroLinea" required>
    </div>
    <div class="form-group">
      <label for="tiempoInicio"><b>Track Inicial de tiempo (formato 00:00:00.000)</b></label>
      <input type="text" class="form-control" id="tiempoInicio" placeholder="hh:mm:ss:ms" name="tiempoInicio" required>
    </div>
    <div class="form-group">
      <label for="tiempoFin"><b>Track Final de tiempo (formato 00:00:00.000)</b></label>
      <input type="text" class="form-control" id="tiempoFin" placeholder="hh:mm:ss:ms" name="tiempoFin"required >
    </div>
    <div class="form-group">
    <label for="textoSubtitulo"><b>Texto del Subtitulo:</b></label>
    <textarea id="textoSubtitulo" name="textoSubtitulo" rows="2"  required></textarea>
    </div>

    <button type="submit" class="btn btn-primary"><b>Grabar Subtitulo</b></button>
    </form>
</div>
</body>
</html>
