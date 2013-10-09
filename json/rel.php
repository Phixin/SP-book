<?php
header('Access-Control-Allow-Origin: *');

$b= $_REQUEST['b'];

if($b == 1){
   $rel = array(
    'title'=>'el libro',
    'editorial'=> 'Omega',
    'idBook'=> 1,
    'img'=> 'img/photo.png'
   )
}

echo json_encode($rel);
?>
