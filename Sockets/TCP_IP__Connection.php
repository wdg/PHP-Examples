<?php
/* Set error reporting on. log all the errors, notices, warnings, exceptions */
error_reporting(E_ALL);

/* Get the port for the WWW service. */
$service_port = getservbyname('www', 'tcp');

/* Get the IP address for the target host. */
$address = gethostbyname('www.example.com');

/* Create a TCP/IP socket. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

/* is the socket created? */
if ($socket === false) {
    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
}

echo "Attempting to connect to '$address' on port '$service_port'...";
$result = socket_connect($socket, $address, $service_port);

/* is a connection TRUE???? */
if ($result === false) {
    echo "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
}

/* Setup the HTTP HEADERS... */
$in = "HEAD / HTTP/1.1\r\n";
$in .= "Host: www.example.com\r\n";
$in .= "Connection: Close\r\n\r\n";
$out = '';

/* SEND THE HEADERS */
echo "Sending HTTP HEAD request...";
socket_write($socket, $in, strlen($in));

echo "Reading response:\n\n";
while ($out = socket_read($socket, 2048)) { //Fetch the data...
    echo $out; //Display the data..
}

// Closing socket...
socket_close($socket);

?>