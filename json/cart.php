<?php
header('Access-Control-Allow-Origin: *');

$iduser = $_REQUEST['idUser'];
if($iduser == 5){
   $cart[] = array('title'=>'lo que se llevo', 'theme'=>'comedia', 'price'=>12.3, 'promo'=> null, 'idBook'=>15);
   $cart[] = array('title'=>'lo que se llevo 2', 'theme'=>'comedia', 'price'=>'free', 'promo'=> '2x1', 'idBook'=>20);

} else {
   $cart[] = array();
}
echo json_encode($cart);
?>