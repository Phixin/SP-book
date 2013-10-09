<?php 
header('Access-Control-Allow-Origin: *');

$user = $_REQUEST['u'];
$book = $_REQUEST['b'];
$lang = $_REQUEST['l'];

if($user == 1 && $book ==1 && $lang=='es'){
   
  $book = array(
     'title'=>'Lo que Gio dejo',
     'autor'=>'hlab', 
     'theme'=>'comedia',
     'price'=>'free',
     'promo'=>'null',
     'idBook'=>'00001'
     'img'=> 'img/book.png',
     'pages'=>'10',
     'lan'=>'es',
     'size'=>'200',
     'totalRank'=>10,
     'download'=>true,
     'demo'=> true,
     'synopsis'=>'Es la historia de un niñito casi argentino :)',
     'url'=>'val.php',
     'collection' => array('uno.json', 'dos.json')
  )   

echo json_encode($book);
}
?>