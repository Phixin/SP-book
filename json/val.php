<?php
header('Access-Control-Allow-Origin: *');

$b= $_REQUEST['b'];

if($b == 1){
   $val = array(
    'name'=>'el libro',
    'date'=> '0000-00-00',
    'text'=> 'aca va la carreta',
    'rank'=> '5'
   )
}

echo json_encode($val);
?>
