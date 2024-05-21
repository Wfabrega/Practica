<?php
// Conexión a la base de datos (reemplaza los valores con los de tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "subtitulos";//nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$numeroLinea = $_POST['numeroLinea'];
$tiempoInicio = $_POST['tiempoInicio'];
$tiempoFin = $_POST['tiempoFin'];
$textoSubtitulo = $_POST['textoSubtitulo'];

// Preparar la consulta SQL para insertar los subtítulos en la base de datos 
//la tabla se llama subtitulo
$sql = "INSERT INTO subtitulo (numero_linea, tiempo_inicio, tiempo_fin, texto_subtitulo)
        VALUES ('$numeroLinea', '$tiempoInicio', '$tiempoFin', '$textoSubtitulo')";

if ($conn->query($sql) === TRUE) {
    // Generar el archivo WebVTT ojo aqui se genera el achivo WebVTT 
    $archivoSubtitulos = '/src/view/subtitulos.vtt';//ojo el nombre del subtitulos.vtt importante esa extension
    $contenidoVTT = "WEBVTT\n\n$numeroLinea\n$tiempoInicio --> $tiempoFin\n$textoSubtitulo\n";
    file_put_contents($archivoSubtitulos, $contenidoVTT);
    
    echo "Subtitulo guardado correctamente.";
} else {
    echo "Error al guardar el subtitulo en la base de datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
