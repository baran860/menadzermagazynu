<?php 
header('Content-type: image/png');
include_once('barcode.php');

$barcode = new Barcode($_GET['number'], 1);
$barcode->display();
?>