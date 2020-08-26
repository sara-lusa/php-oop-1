<?php
require_once(__DIR__ . '/User.php');

$sara = new User();
$sara->name = 'Sara';
$sara->surname = 'Lusa';
$sara->eta = 21;
var_dump($sara);

$pippo = new User();
$pippo->name = 'Pippo';
$pippo->surname = 'Verdi';
$pippo->eta = 30;
var_dump($pippo);
?>
