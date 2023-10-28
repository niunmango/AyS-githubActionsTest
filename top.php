<?php
header("Content-Type: text/plain");

// Ejecutar y capturar salida de top
exec('top -bn 1', $output);

// Imprimir la salida
foreach ($output as $line) {
    echo $line . "\n";
}
?>