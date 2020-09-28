<?php
require_once('./MGQrCodeReader/MGQrCodeReader.php');
$img = './img/***REMOVED***123';
$MGQrCodeReader = new \MGQrCodeReader\MGQrCodeReader();
var_dump($MGQrCodeReader->read($img));


var_dump(gd_info());
?>
