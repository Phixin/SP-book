<?php
header('Access-Control-Allow-Origin: *');

$b = $_REQUEST['b'];
$u = $_REQUEST['u'];

if(count($b)> 0){
	echo json_encode('true');
} else {
	echo json_encode('false');
}
?>