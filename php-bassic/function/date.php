<?php

// date
echo  date("l, d-M-Y");
echo "<br>";

//time waktu komputerdi ciptakan 
echo time();
echo "<br>";

// mktime
echo date("l", mktime(0, 0, 0, 8, 06, 1998));
echo "<br>";
sleep("30");
// strtotime
echo date("l", strtotime("6 aug 1998"));
