<?php

$string = "Hello Base64";
$encode = base64_encode($string);

echo sprintf("Encoded: %s,<br>Decoded: %s", $encode, base64_decode($encode));

?>