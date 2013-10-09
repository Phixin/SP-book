<?php
header('Access-Control-Allow-Origin: *');

$name = $_REQUEST['name'];
$mail = $_REQUEST['email'];
$lan = $_REQUEST['lan'];
$foto =  $_REQUEST['foto'];

if($name == 'gio' && $mail=='h@l.com' && $lan=='es' && $foto=='picture.png'){
  $update = 1;
} else {
  $update = 0;
}
echo json_encode($update);
?>