<?php

$originalDate = strtotime('Feb 20, 2013');
$now = new DateTime();

echo 'Copyright &copy ' . date('Y', $originalDate) . '-' . $now -> format('y');