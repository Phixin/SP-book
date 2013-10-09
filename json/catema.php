<?php
header('Access-Control-Allow-Origin: *');

$c = $_REQUEST['c'];
$t = $_REQUEST['t'];

 $catema['familia']['ninos'][] = array(
     'title'=> "El Habitus en la ...",
     'editorial'=>'Editorial San Pablo',
     'idBook'=>'123456',
     'img'=>'images/1.png'
 );
  $catema['familia']['ninos'][] = array(
     'title'=> "El Habitus en la ...",
     'editorial'=>'Editorial San Pablo',
     'idBook'=>'123456',
     'img'=>'images/2.png'
 );
 $catema['familia']['ninos'][] = array(
     'title'=> "El Habitus en la ...",
     'editorial'=>'Editorial San Pablo',
     'idBook'=>'123456',
     'img'=>'images/3.png'
 );
 $catema['familia']['ninos'][] = array(
     'title'=> "El Habitus en la ...",
     'editorial'=>'Editorial San Pablo',
     'idBook'=>'123456',
     'img'=>'images/4.png'
 );
 $catema['familia']['ninos'][] = array(
     'title'=> "El Habitus en la ...",
     'editorial'=>'Editorial San Pablo',
     'idBook'=>'123456',
     'img'=>'images/5.png'
 );

//echo "<pre>";
//print_r($catema['familia']['ninos']);
//echo "</pre>";
echo json_encode($catema[$c][$t]);
?>