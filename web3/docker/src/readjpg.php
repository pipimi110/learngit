<?php
require_once('./MGQrCodeReader/MGQrCodeReader.php');
$img = './img/123123123';
$MGQrCodeReader = new \MGQrCodeReader\MGQrCodeReader();
var_dump($MGQrCodeReader->read($img));


var_dump(gd_info());
?>
