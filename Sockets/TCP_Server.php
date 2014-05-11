<?php
/* Set error reporting on */
error_reporting(E_ALL);

/* Allow the script to hang around waiting for connections. */
set_time_limit(0);

/* Turn on implicit output flushing so we see what we're getting
 * as it comes in. */
ob_implicit_flush();

$address = '192.168.1.53'; //Server's Address
$port = 10000;             //port for lissening

if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) { //Create te socket and check that it not has failed
    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n"; // failed....
}

if (socket_bind($sock, $address, $port) === false) { //bind socket to ipadress and port
    echo "socket_bind() failed: reason: " . socket_strerror(socket_last_error($sock)) . "\n";
}

if (socket_listen($sock, 5) === false) { //listen for connections
    echo "socket_listen() failed: reason: " . socket_strerror(socket_last_error($sock)) . "\n";
}

do {
    if (($msgsock = socket_accept($sock)) === false) { //accept a incoming connection.
        echo "socket_accept() failed: reason: " . socket_strerror(socket_last_error($sock)) . "\n";
        break;
    }
    /* Send instructions. */
    $msg = "\nWelcome to the PHP Test Server. \n" .
        "To shut down the server type 'shutdown'.\n";
    socket_write($msgsock, $msg, strlen($msg));

    do {
        if (false === ($buf = socket_read($msgsock, 2048, PHP_NORMAL_READ))) { //if error reading break while.
            echo "socket_read() failed: reason: " . socket_strerror(socket_last_error($msgsock)) . "\n";
            break 2;
        }
        if (!$buf = trim($buf)) { //if the data is not yet what a user have send get more data...
            continue;
        }
        if ($buf == 'shutdown') { //if the user says 'shutdown' then..
            socket_close($msgsock); //close this socket.
            break 2;
        }

        $talkback = "[PHP] You said '$buf'.\n"; //what php, gonna say to connected user.
        socket_write($msgsock, $talkback, strlen($talkback)); // send ^^^^ above ^^^^ message.

        echo "[Data] $buf\n"; //commandline also log things for you ;)

    } while (true);

    socket_close($msgsock);

} while (true);

socket_close($sock);
?>