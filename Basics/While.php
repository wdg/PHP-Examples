<?php
# Public PHP Examles
# Created by: Wesley De Groot
# Website:    http://www.wdgp.nl
# Free For Learning, Not supposed for Resale.
# Free For PERSONAL use, do not copy-paste without informing me.
# Need Information?, Have an idea?, have a code? (your information will be published)
# Contact: PHPExamle@wdgp.nl
# Thanks, and have fun with learning PHP

$loop = true; #Set Loop=on
$loop_cnt = 0; #Set loop number 0; we'll count to 10.

while ( $loop == true ) //while the loop is equal to True. then...
{
    if ($loop_cnt>9)//if loop_count is more then 9. then...
    {
        $loop = false; //turn loop off.
        echo "Loop Ended."; //send message "loop ended."
    } //endif

    $loop_cnt++; //loop_count +1;
} //endif.

?>