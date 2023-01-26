<?php

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo" <h2> Informacion Recibida desde PHP <h2> <br>";
echo "El nombre recibido es: " . $nombre . "<br>";
echo "El asunto recibido es: " . $asunto . "<br>";
echo "El mensaje recibido es: " . $mensaje . "<br>";


?>