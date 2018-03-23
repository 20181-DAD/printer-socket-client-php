<?php

/* Obtener el puerto para el servicio WWW. */
$service_port = '7654';

/* Obtener la dirección IP para el host objetivo. */
$address = '172.22.90.1';

/* Crear un socket TCP/IP. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

$result = socket_connect($socket, $address, $service_port);


$in = "HEAD mi texto\r\n";
$in .= "Host: cliente php\r\n";
$in .= "Connection: Close\r\n\r\n";

socket_write($socket, $in, strlen($in));

echo "Cerrando socket...";
socket_close($socket);
echo "OK.\n\n";
?>