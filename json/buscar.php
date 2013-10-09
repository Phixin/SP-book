<?php 
header('Access-Control-Allow-Origin: *');

$w = $_REQUEST['w'];

if($w == 'libro'){
   
  $book = array(
     'title'=>'Lo que Gio dejo',
     'theme'=>'comedia',
     'price'=>'free',
     'promo'=>'null',
     'idBook'=>'00001'
     'img'=> 'img/book.png'
  )   

echo json_encode($book);
}
?>