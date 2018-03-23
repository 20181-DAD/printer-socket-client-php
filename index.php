<?php
$socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
socket_bind($socket,'127.0.0.1',10001);
socket_listen($socket);
$conn = socket_accept($socket);

echo "Esperando conexión\n\n";

if ($conn !== false) {
// communicate over $conn
	echo "conexión recibida\n\n";
}
socket_close($conn);
socket_close($socket);

?>






<?php
/*
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_bind($socket, 0, 10000);
socket_listen($socket);
socket_accept($socket);
*/
/*
set_time_limit(0);

$host = 'localhost';
$port = 8087;

        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);

        //bind socket to specified host
        socket_bind($socket, 0, $port);
        //listen to port
        socket_listen($socket);
        $msgsock = socket_accept($socket);

        $msg = "\nBienvenido al Servidor De Prueba de PHP. \n" .
        "Para salir, escriba 'quit'. Para cerrar el servidor escriba 'shutdown'.\n";
    socket_write($msgsock, $msg, strlen($msg));

		socket_close($msgsock);
        socket_close($socket);
        */

?>

<?php

/*
$service_port = '7654';
$address = '172.22.90.1';

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$result = socket_connect($socket, $address, $service_port);

$in = "HEAD mi texto\n";
$in .= "Host: cliente php\n";
$in .= "Angel Sullon\n\n";

socket_write($socket, $in, strlen($in));

echo "Cerrando socket...";
socket_close($socket);
echo "OK.\n\n";
*/
?>