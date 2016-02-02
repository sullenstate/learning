<?php

// $xmas2017 = strtotime('Dec 25, 2017');

// echo date('l, F j, Y', $xmas2017);

$date1 = new DateTime();
$date2 = new DateTime();

$west_coast = new DateTimeZone('America/Los_Angeles');

$date2 -> setTimezone($west_coast);

echo $date1 -> format('g:ia, l, Fj, Y') . '</br>';
echo $date2 -> format('g:ia, l, Fj, Y') . '</br>';
