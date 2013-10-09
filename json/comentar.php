<?php
header('Access-Control-Allow-Origin: *');

$i = $_REQUEST['i'];
$u = $_REQUEST['u'];
$n = $_REQUEST['n'];
$m = $_REQUEST['m'];
$t = $_REQUEST['t'];
$r = $_REQUEST['r'];

if($i==1 && $u==5 && $n=='libro' && $m='m@l.com' &&  $t!='' && $r!=0){
  $json = array('status'=>1);
} else {
  $json = array('status'=>1);	
}

echo json_encode($json);
?>