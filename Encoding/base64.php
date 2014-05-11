<?php
# Public PHP Examles
# Created by: Wesley De Groot
# Website:    http://www.wdgp.nl
# Free For Learning, Not supposed for Resale.
# Free For PERSONAL use, do not copy-paste without informing me.
# Need Information?, Have an idea?, have a code? (your information will be published)
# Contact: PHPExamle@wdgp.nl
# Thanks, and have fun with learning PHP

$string = "Hello Base64";
$encode = base64_encode($string);

echo sprintf("Encoded: %s,<br>Decoded: %s", $encode, base64_decode($encode));

?>